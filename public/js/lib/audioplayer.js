(function(e, t, n, r) {
    var i = "ontouchstart" in t,
        s = i ? "touchstart" : "mousedown",
        o = i ? "touchmove" : "mousemove",
        u = i ? "touchend" : "mouseup",
        a = i ? "touchcancel" : "mouseup",
        f = function(e) {
            var t = Math.floor(e / 3600),
                n = Math.floor(e % 3600 / 60),
                r = Math.ceil(e % 3600 % 60);
            return (t == 0 ? "" : t > 0 && t.toString().length < 2 ? "0" + t + ":" : t + ":") + (n.toString().length < 2 ? "0" + n : n) + ":" + (r.toString().length < 2 ? "0" + r : r)
        },
        l = function(e) {
            var t = n.createElement("audio");
            return !!(t.canPlayType && t.canPlayType("audio/" + e.split(".").pop().toLowerCase() + ";").replace(/no/, ""))
        };
    e.fn.audioPlayer = function(t) {
        var t = e.extend({
                classPrefix: "audioplayer",
                strPlay: "Play",
                strPause: "Pause",
                strVolume: "Volume"
            }, t),
            n = {},
            r = {
                playPause: "playpause",
                playing: "playing",
                time: "time",
                timeCurrent: "time-current",
                timeDuration: "time-duration",
                bar: "bar",
                barLoaded: "bar-loaded",
                barPlayed: "bar-played",
                volume: "volume",
                volumeButton: "volume-button",
                volumeAdjust: "volume-adjust",
                noVolume: "novolume",
                mute: "mute",
                mini: "mini"
            };
        for (var u in r) n[u] = t.classPrefix + "-" + r[u];
        this.each(function() {
            if (e(this).prop("tagName").toLowerCase() != "audio") return false;
            var r = e(this),
                u = r.attr("src"),
                c = r.get(0).getAttribute("autoplay"),
                c = c === "" || c === "autoplay" ? true : false,
                h = r.get(0).getAttribute("loop"),
                h = h === "" || h === "loop" ? true : false,
                p = false;
            if (typeof u === "undefined") {
                r.find("source").each(function() {
                    u = e(this).attr("src");
                    if (typeof u !== "undefined" && l(u)) {
                        p = true;
                        return false
                    }
                })
            } else if (l(u)) p = true;
            var d = e('<div class="' + t.classPrefix + '">' + (p ? e("<div>").append(r.eq(0).clone()).html() : '<embed src="' + u + '" width="0" height="0" volume="100" autostart="' + c.toString() + '" loop="' + h.toString() + '" />') + '<div class="' + n.playPause + '" title="' + t.strPlay + '"><a href="#">' + t.strPlay + "</a></div></div>"),
                v = p ? d.find("audio") : d.find("embed"),
                v = v.get(0);
            if (p) {
                d.find("audio").css({
                    width: 0,
                    height: 0,
                    visibility: "hidden"
                });
                d.append('<div class="' + n.time + " " + n.timeCurrent + '"></div><div class="' + n.bar + '"><div class="' + n.barLoaded + '"></div><div class="' + n.barPlayed + '"></div></div><div class="' + n.time + " " + n.timeDuration + '"></div><div class="' + n.volume + '"><div class="' + n.volumeButton + '" title="' + t.strVolume + '"><a href="#">' + t.strVolume + '</a></div><div class="' + n.volumeAdjust + '"><div><div></div></div></div></div>');
                var m = d.find("." + n.bar),
                    g = d.find("." + n.barPlayed),
                    y = d.find("." + n.barLoaded),
                    b = d.find("." + n.timeCurrent),
                    w = d.find("." + n.timeDuration),
                    E = d.find("." + n.volumeButton),
                    S = d.find("." + n.volumeAdjust + " > div"),
                    x = 0,
                    T = function(e) {
                        theRealEvent = i ? e.originalEvent.touches[0] : e;
                        v.currentTime = Math.round(v.duration * (theRealEvent.pageX - m.offset().left) / m.width())
                    },
                    N = function(e) {
                        theRealEvent = i ? e.originalEvent.touches[0] : e;
                        v.volume = Math.abs((theRealEvent.pageY - (S.offset().top + S.height())) / S.height())
                    },
                    C = setInterval(function() {
                        if ( v.duration && v.buffered.length){
							y.width(v.buffered.end(0) / v.duration * 100 + "%");
							if (v.buffered.end(0) >= v.duration) clearInterval(C)
						}
                    }, 100);
                var k = v.volume,
                    L = v.volume = .111;
                if (Math.round(v.volume * 1e3) / 1e3 == L) v.volume = k;
                else d.addClass(n.noVolume);
                w.html("…");
                b.text(f(0));
                v.addEventListener("loadeddata", function() {
                    w.text(f(v.duration));
                    S.find("div").height(v.volume * 100 + "%");
                    x = v.volume
                });
                v.addEventListener("timeupdate", function() {
                    b.text(f(v.currentTime));
                    g.width(v.currentTime / v.duration * 100 + "%")
                });
                v.addEventListener("volumechange", function() {
                    S.find("div").height(v.volume * 100 + "%");
                    if (v.volume > 0 && d.hasClass(n.mute)) d.removeClass(n.mute);
                    if (v.volume <= 0 && !d.hasClass(n.mute)) d.addClass(n.mute)
                });
                v.addEventListener("ended", function() {
                    d.removeClass(n.playing)
                });
                m.on(s, function(e) {
                    T(e);
                    m.on(o, function(e) {
                        T(e)
                    })
                }).on(a, function() {
                    m.unbind(o)
                });
                E.on("click", function() {
                    if (d.hasClass(n.mute)) {
                        d.removeClass(n.mute);
                        v.volume = x
                    } else {
                        d.addClass(n.mute);
                        x = v.volume;
                        v.volume = 0
                    }
                    return false
                });
                S.on(s, function(e) {
                    N(e);
                    S.on(o, function(e) {
                        N(e)
                    })
                }).on(a, function() {
                    S.unbind(o)
                })
            } else d.addClass(n.mini);
            if (c) d.addClass(n.playing);
            d.find("." + n.playPause).on("click", function() {
                if (d.hasClass(n.playing)) {
                    e(this).attr("title", t.strPlay).find("a").html(t.strPlay);
                    d.removeClass(n.playing);
                    p ? v.pause() : v.Stop()
                } else {
                    e(this).attr("title", t.strPause).find("a").html(t.strPause);
                    d.addClass(n.playing);
                    p ? v.play() : v.Play()
                }
                return false
            });
            r.replaceWith(d)
        });
        return this
    }
})(jQuery, window, document)