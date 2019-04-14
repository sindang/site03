var lnbnum = -1;
var browerWidth = 0;
var arrTop1024 = new Array();
var arrLeft1024 = new Array();
var arrTop1280 = new Array();
var arrLeft1280 = new Array();


jQuery(document).ready(function () {

    if (userAgent() == "FF")
        browerWidth = 0;

    if (userAgent() == "MZ")
        browerWidth = 17;

    if (userAgent() == "IE")
	  browerWidth = 17;
    var w,

        h,

        x,

        y,

        direction

    jQuery(".mainList")
        .find(".listSpec")
        .hide();

    //jQuery(".directBt").css('top',	-500);

    jQuery(".mainList").each(function (q) {
        //섬네일 탭포커스 인
        jQuery(this).focusin(function () {

            jQuery(this)
                .find(".listSpec")
                .show();

            jQuery(this)
                .find(".listSpec")
                .css("top", 350);

            jQuery(this)
                .find(".listSpec")
                .stop()
                .animate({
                    top: 0
                }, 500, "easeOutExpo");

        })

        //섬네일 탭포커스 아웃

        jQuery(this).focusout(function () {

            jQuery(this)
                .find(".listSpec")
                .hide();

            jQuery(this)
                .find(".listSpec")
                .stop()
                .animate({
                    top: 350
                }, 500, "easeOutExpo", function () {

                    jQuery(this)
                        .find(".listSpec")
                        .hide();

                });

        })

    })

    //document resize 이벤트

    var isResize = false;
    jQuery(window).resize(function () {
		        //가장 큰 해상도
        if (jQuery(window).width() > 150 + browerWidth) {
            jQuery(".mainList").each(function (q) {
                jQuery(this).bind("mouseenter", function (event) {
                    w         = jQuery(this).width()
                    h         = jQuery(this).height()
                    x         = (event.pageX - jQuery(this).offset().left - (w / 2)) * (w > h
                        ? (h / w)
                        : 1),
                    y         = (event.pageY - jQuery(this).offset().top - (h / 2)) * (h > w
                        ? (w / h)
                        : 1),
                    direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) + 180) / 90) + 3) % 4;

                    jQuery(this)
                        .find(".listSpec")
                        .show();

                    if (direction == 0) {

                        jQuery(this)
                            .find(".listSpec")
                            .css({
                                "left": 0,
                                "top" : -h
                            });

                    } else if (direction == 1) {

                        jQuery(this)
                            .find(".listSpec")
                            .css({"left": w, "top": 0});

                    } else if (direction == 2) {

                        jQuery(this)
                            .find(".listSpec")
                            .css({"left": 0, "top": h});

                    } else {

                        jQuery(this)
                            .find(".listSpec")
                            .css({
                                "left": -w,
                                "top" : 0
                            });

                    }
                    jQuery(this)
                        .find(".listSpec")
                        .stop()
                        .animate({
                            left: 0,
                            top : 0
                        }, 500, "easeOutExpo");

                })

                //섬네일 마우스아웃 바인드

                jQuery(this).bind("mouseleave", function (event) {
                    w         = jQuery(this).width()
                    h         = jQuery(this).height()

                    x         = (event.pageX - jQuery(this).offset().left - (w / 2)) * (w > h
                        ? (h / w)
                        : 1),

                    y         = (event.pageY - jQuery(this).offset().top - (h / 2)) * (h > w
                        ? (w / h)
						   : 1),

                    direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) + 180) / 90) + 3) % 4;
                    if (direction == 0) {
                        jQuery(this)
                            .find(".listSpec")
                            .stop()
                            .animate({
                                left: 0,
                                top : -h
                            }, 500, "easeOutExpo", function () {
                                jQuery(this)
                                    .parent()
                                    .find(".listSpec")
                                    .hide();
                            });

                    } else if (direction == 1) {

                        jQuery(this)
                            .find(".listSpec")
                            .stop()
                            .animate({
                                left: w,
                                top : 0
                            }, 500, "easeOutExpo", function () {

                                jQuery(this)
                                    .parent()
                                    .find(".listSpec")
                                    .hide();
                            });

                    } else if (direction == 2) {
                        jQuery(this)
                            .find(".listSpec")
                            .stop()
                            .animate({
                                left: 0,
                                top : h
                            }, 500, "easeOutExpo", function () {

                                jQuery(this)
                                    .parent()
                                    .find(".listSpec")
                                    .hide();
                            });

                    } else {
                        jQuery(this)
                            .find(".listSpec")
                            .stop()
                            .animate({
                                left: -w,
                                top : 0
                            }, 500, "easeOutExpo", function () {

                                jQuery(this)
                                    .parent()
                                    .find(".listSpec")
                                    .hide();
                            });
                    }
                })

                jQuery(".mainList")
                    .eq(q)
                    .stop()
                    .animate({
                        left: arrLeft1280[q],
                        top : arrTop1280[q]
                    }, 1000);

            })
            isResize = false;

        } //폰 해상도
        if (jQuery(window).width() < 100 + browerWidth) {
            jQuery(".mainList").each(function (q) {
                jQuery(this).unbind("mouseenter mouseleave");
                if (!isResize) {}
            })

            isResize = true;

        }

    })

    jQuery(window).resize();
    var $container = jQuery('#container');

})

function userAgent() {
    var browserType = "";
    if (navigator.userAgent.indexOf("MSIE") != -1) {

        browserType = "IE";
        return browserType;
    }
    if (navigator.userAgent.indexOf("Firefox") != -1) {

        browserType = "FF";
        return browserType;

    }
    if (navigator.userAgent.indexOf("Mozilla") != -1) {

        browserType = "MZ";
        return browserType;

    }
    if (navigator.userAgent.indexOf("Opera") != -1) {
        browserType = "OP";

        return browserType;
    }
    if (navigator.userAgent.indexOf("Safari") != -1) {

        browserType = "SF";
        return browserType;
    }
    if (navigator.userAgent.indexOf("Mac") != -1) {
        browserType = "MC";
        return browserType;

    }
    browserType = "NG";
    return browserType;

}
