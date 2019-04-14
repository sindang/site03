!function (a) {
    a.fn.simpleSlideShow = function (b) {
        function i() {
            a(d)
                .removeClass("fading")
                .addClass("sliding");
            var b = a(d).width();
            a(d).width(b),
            a(d + " ." + c.itemClass).width(b),
            a(d + " ." + c.itemClass).css("float", "left"),
            a(d + " .contents").css("display", "block"),
            a(d + " .contents").css("position", "relative"),
            a(d + " .contents").css("left", 0),
            a(d + " .contents").width(b * e),
            a(d)
                .find(".wrapper")
                .css("overflow", "hidden")
        }
        function j() {
            a(d).width(""),
            a(d + " ." + c.itemClass).width(""),
            a(d + " .wrapper").width(""),
            a(d + " .contents").width("");
            var b = a(d).width();
            a(d + " ." + c.itemClass).width(b),
            a(d + " .wrapper").width(b),
            a(d + " .contents").width(b * e),
            a(d + " .contents").css("left", -Math.abs(b * (f - 1)))
        }
        function k() {
            a(d + " .contents").append('<div class="transitionMask"><div></div></div>')
        }
        function l() {
            a(d + " ." + c.itemClass).each(function () {
                a(this).css("height", "")
            });
            var b = -1;
            a(d + " ." + c.itemClass).each(function () {
                a(this).height() > b && (b = a(this).height())
            }),
            a(d + " ." + c.itemClass).height(b)
        }
        function m(b) {
            if (a(d + " ." + c.itemClass).removeClass(c.activeClass), a(d + " ." + c.itemClass +
                    "#" + c.itemClass + "-" + f).addClass(c.activeClass), 1 == c.showDots && (a(d +
                    " .navigation li").removeClass(c.activeClass).removeAttr("class"), a(d + " .nav" +
                    "igation li#" + c.navName + "-" + f).addClass(c.activeClass)), 1 == c.showProgress && a(d).find("#progress ul").css("left", "-" +
                    (1 * f - 1) + "em"), "animate" == c.transition) {
                if (b = "left" == b
                    ? "right"
                    : "left",
                void 0 == b)
                    var b = "right";
                a(".content").removeClass("left"),
                a(".content").removeClass("right"),
                a(".contents")
                    .addClass("animate")
                    .queue(function (c) {
                        a(d + " .transitionMask").addClass(b),
                        a(d + " .contents").addClass(b),
                        c()
                    })
                    .queue(function (e) {
                        a(d + " ." + c.itemClass + "#" + c.itemClass + "-" + f + " .content").addClass(b),
                        e()
                    })
                    .delay(1.25 * c.transitionTime)
                    .queue(function (c) {
                        a(this).removeClass("animate"),
                        a(d + " .transitionMask").removeClass(b),
                        a(d + " .contents").removeClass(b),
                        c()
                    }),
                "left" == b
                    ? (a(d + " ." + c.itemClass + "#" + c.itemClass + "-" + f).stop(!0, !0).animate({
                        right: "50%"
                    }, 1), a(d + " ." + c.itemClass + "#" + c.itemClass + "-" + f).delay(c.transitionTime / 2).queue(function (b) {
                        a(this).animate({
                            right: "0%"
                        }, c.transitionTime / 2, "swing"),
                        b()
                    }), a(d + " ." + c.itemClass + "#" + c.itemClass + "-" + f + " grid-container").stop(!0, !0).animate({
                        left: "0%"
                    }, 1), a(d + " ." + c.itemClass + "#" + c.itemClass + "-" + f + " grid-container").delay(c.transitionTime / 2).queue(function (b) {
                        a(this).animate({
                            left: "50%"
                        }, c.transitionTime, "swing"),
                        b()
                    }))
                    : (a(d + " ." + c.itemClass + "#" + c.itemClass + "-" + f).stop(!0, !0).animate({
                        left: "50%"
                    }, 1), a(d + " ." + c.itemClass + "#" + c.itemClass + "-" + f).delay(c.transitionTime / 2).queue(function (b) {
                        a(this).animate({
                            left: "0%"
                        }, c.transitionTime / 2, "swing"),
                        b()
                    }), a(d + " ." + c.itemClass + "#" + c.itemClass + "-" + f + " grid-container").stop(!0, !0).animate({
                        left: "100%"
                    }, 1), a(d + " ." + c.itemClass + "#" + c.itemClass + "-" + f + " grid-container").delay(c.transitionTime / 2).queue(function (b) {
                        a(this).animate({
                            left: "50%"
                        }, c.transitionTime, "swing"),
                        b()
                    }))
            }
            if ("slide" == c.transition) {
                a(d)
                    .stop()
                    .addClass("transition");
                var e = a(d + " ." + c.itemClass).width();
                a(d + " .contents").css("left", -Math.abs(e * (f - 1))),
                a(d)
                    .delay(c.transitionTime)
                    .queue(function (b) {
                        a(d).removeClass("transition"),
                        b()
                    })
            }
            if ("css" == c.transition && a(".contents").addClass("animate").delay(c.transitionTime).queue(function (b) {
                a(this).removeClass("animate"),
                b()
            }), a(d).find("video").length > 0 && a(d + " video").each(function () {
                a(window).width() > 721 && a(this)
                    .get(0)
                    .pause()
            }), a(d + " ." + c.itemClass + "#" + c.itemClass + "-" + f).find("video").length && a(window).width() > 721 && (a(d +
                    " ." + c.itemClass + "#" + c.itemClass + "-" + f + " video").get(0).currentTime = 0, a(d +
                    " ." + c.itemClass + "#" + c.itemClass + "-" + f + " video").get(0).play()), 1 == c.showTimer && c.autoplaySpeed > 0) {
                var g = a(d + " .timer div").css("right");
                a(d + " .timer div")
                    .stop(!0, !0)
                    .css("right", g),
                a(d + " .timer div").animate({
                    right: "0%"
                }, c.transitionTime / 2, "linear"),
                a(d + " .timer div").animate({
                    left: "100%"
                }, c.transitionTime / 1.9, "linear"),
                a(d + " .timer div")
                    .delay(c.transitionTime / 2)
                    .queue(function (b) {
                        a(this)
                            .stop(!0, !0)
                            .css({left: "0%", right: "100%"}),
                        a(d + " .timer div").animate({
                            right: "0%"
                        }, c.autoplaySpeed - c.transitionTime, "linear"),
                        b()
                    })
            }
        }
        function n() {
            clearInterval(q)
        }
        function o() {
            if (0 !== c.autoplaySpeed) {
                setInterval(p, c.autoplaySpeed)
            }
        }
        function p() {
            f += 1,
            f > e && (f = 1),
            m()
        }
        function r(a) {
            "right" == a
                ? (f -= 1, f < 1 && (f = e))
                : "left" == a && (f += 1, f > e && (f = 1)),
            "left" != a && "right" != a || (m(a), 0 !== c.autoplaySpeed && (clearInterval(q), q = setInterval(p, c.autoplaySpeed)))
        }
        var c = a.extend({
                activeClass   : "current",
                autoplaySpeed : 5e3,
                containerClass: "slideshow",
                dotLabel      : "&#x26AB;",
                itemClass     : "slide",
                itemContainer : "div",
                matchHeights  : !1,
                navName       : "nav",
                nextLabel     : "",
                pauseLabel    : "&#x25BA;",
                playLabel     : "&#9658;",
                prevLabel     : "",
                showControls  : 1,
                showDots      : 1,
                showNav       : 1,
                showProgress  : 0,
                showTimer     : 0,
                transition    : "slide",
                transitionTime: 1e3
            }, b),
            d = this.selector,
            e = 1,
            f = 1;
        if ("none" == c.transition
            ? a(d).addClass(c.containerClass).addClass("fading")
            : "slide" == c.transition
                ? a(d).addClass(c.containerClass).addClass("sliding")
                : "animate" == c.transition && a(d).addClass(c.containerClass).addClass("animating"),
        "css" == c.transition && a(d).addClass(c.containerClass).addClass("css"),
        a(d).addClass("notransition").delay(500).queue(function (b) {
            a(this).removeClass("notransition"),
            b()
        }),
        1 == c.showNav && a(d + " .contents").parent().after('<ul class="controls">\n\t\t\t\t<li id="prev">' +
                c.prevLabel + '</li><li id="progress"></li> \n\t\t\t\t<li id="next">' + c.nextLabel +
                "</li>\n\t\t\t</div>"),
        0 == c.showProgress && a(d).find("#progress").remove(),
        1 == c.showControls && a(d + " .contents").parent().after('<ul class="actions" style="display:none">\n\t\t\t\t<li id="play">' +
                c.playLabel + '</li>\n\t\t\t\t<li id="pause">' + c.pauseLabel + "</li>\n\t\t\t<" +
                "/div>"),
        1 == c.showDots && a(d + " .contents").parent().after('<ul class="navigation">\n\t\t\t</ul>'),
        1 == c.showTimer && c.autoplaySpeed > 0 && (a(d + " .contents").parent().after('<div class="timer"><div></div></div>'), a(d +
                " .timer div").animate({
            right: "100%"
        }, 1), a(d + " .timer div").animate({
            right: "0%"
        }, c.autoplaySpeed)),
        a(d + " .contents > " + c.itemContainer).each(function () {
            a(this).addClass(c.itemClass),
            a(this).attr("id", c.itemClass + "-" + e),
            1 == c.showDots && a(d + " .navigation").append('<li id="' + c.navName + "-" + e +
                    '">' + c.dotLabel + "</li>"),
            1 == e && (a(this).addClass("current"), 1 == c.showDots && a(d + " .navigation " +
                    "li#" + c.navName + "-1").addClass("current")),
            e += 1
        }),
        e -= 1,
        1 == c.showProgress) {
            for (var g = 1, h = ""; g <= e;)
                h = h + "<li>" + g + "</li>",
                g++;
            h = '<div class="slideProgress"><ul style="left: 0em;">' + h + "</ul></div>/<b>" + e +
                    "</b>",
            a(d)
                .find("#progress")
                .html(h)
        }
        if (a(d + " .controls #pause").click(function () {
            n()
        }), a(d + " .controls #play").click(function () {
            o()
        }), 0 !== c.autoplaySpeed)
            var q = setInterval(p, c.autoplaySpeed);
        a(d + " .navigation li").click(function () {
            f = parseInt(a(this).attr("id").replace(/\D/g, "")),
            m(),
            0 !== c.autoplaySpeed && (clearInterval(q), q = setInterval(p, c.autoplaySpeed))
        }),
        a(d + " .controls li").click(function () {
            "prev" == a(this).attr("id")
                ? (f -= 1, f < 1 && (f = e))
                : (f += 1, f > e && (f = 1)),
            m(),
            0 !== c.autoplaySpeed && (clearInterval(q), q = setInterval(p, c.autoplaySpeed))
        }),
        1 == c.matchHeights && l(),
        a(window).resize(function () {
            1 == c.matchHeights && l(),
            "slide" == c.transition && j()
        }),
        a(window).load(function () {
            a(d + " ." + c.itemClass + "#" + c.itemClass + "-" + f)
                .find("video")
                .length && a(d + " ." + c.itemClass + "#" + c.itemClass + "-" + f + " video")
                .get(0)
                .play()
        }),
        "slide" == c.transition && i(),
        "animate" != c.transition && "css" != c.transition || k(),
        a(d).on("swipe", function (a, b) {
            r(b.direction)
        })
    }
}(jQuery);
