$(function ($) {
    "use strict";
    // start

    $.fn.loading = function () {
        var DEFAULTS = {
            backgroundColor: "#b3cef6",
            progressColor: "#4b86db",
            percent: 75,
            duration: 2000,
        };

        $(this).each(function () {
            var $target = $(this);

            var opts = {
                backgroundColor: $target.data("color")
                    ? $target.data("color").split(",")[0]
                    : DEFAULTS.backgroundColor,
                progressColor: $target.data("color")
                    ? $target.data("color").split(",")[1]
                    : DEFAULTS.progressColor,
                percent: $target.data("percent")
                    ? $target.data("percent")
                    : DEFAULTS.percent,
                duration: $target.data("duration")
                    ? $target.data("duration")
                    : DEFAULTS.duration,
            };
            // console.log(opts);

            $target.append(
                '<div class="background"></div><div class="rotate"></div><div class="left"></div><div class="right"></div><div class=""><span>' +
                opts.percent +
                "%</span></div>"
            );

            $target.find(".background").css("background-color", opts.backgroundColor);
            $target.find(".left").css("background-color", opts.backgroundColor);
            $target.find(".rotate").css("background-color", opts.progressColor);
            $target.find(".right").css("background-color", opts.progressColor);

            var $rotate = $target.find(".rotate");
            setTimeout(function () {
                $rotate.css({
                    transition: "transform " + opts.duration + "ms linear",
                    transform: "rotate(" + opts.percent * 3.6 + "deg)",
                });
            }, 1);

            if (opts.percent > 50) {
                var animationRight =
                    "toggle " + (opts.duration / opts.percent) * 50 + "ms step-end";
                var animationLeft =
                    "toggle " + (opts.duration / opts.percent) * 50 + "ms step-start";
                $target.find(".right").css({
                    animation: animationRight,
                    opacity: 1,
                });
                $target.find(".left").css({
                    animation: animationLeft,
                    opacity: 0,
                });
            }
        });
    };

    // end
    jQuery(document).ready(function () {

        $(".toggle-icon").on("click", function () {
            $(".my-navbar").toggleClass("show");
            $(".mainmenu-area").toggleClass("show");
        });

        $("#nav-icon3").click(function () {
            $(this).toggleClass("open");
        });

        $(".my-navbar .mynav-item").on("click", function (e) {
            if (!$(this).hasClass("active")) {
                var tabNum = $(this).index();
                var nthChild = tabNum + 2;
                $(".my-navbar .mynav-item").removeClass("active");
                $(this).addClass("active");
                $("#main > section.active").removeClass("active");
                $("#main > section:nth-child(" + nthChild + ")").addClass("active");
            }
            e.preventDefault();
        });

        $("#home .pagelink").on("click", function (e) {
            e.preventDefault();
            if (e.target.parentNode.id = "g-p-f-h") {
                $(".my-navbar .mynav-item").removeClass("active");
                $(".my-navbar .mynav-item.portfolio").addClass("active");
                $(".my-navbar .mynav-item .portfolio").addClass("active");
                $(".project-gallery").addClass("active");
                $(".my-navbar").toggleClass("show");
                $(".mainmenu-area").toggleClass("show");
                $("#nav-icon3").toggleClass("open");
            }
        });

        //Mixitup js
        $(".project-gallery").mixItUp();

        /*Typed Activate*/
        var $typed = $(".typed");
        if ($typed.length > 0) {
            $typed.typed({
                strings: ["Copywriting", "SEO Content Writing","Blog Writing","Ads Writing","Technical Writing","Social Media Content Writing","Onpage SEO","Website Audit", "Wordpress Development"],
                stringsElement: null,
                typeSpeed: 70,
                startDelay: 150,
                backSpeed: 40,
                backDelay: 350,
                loop: true,
                loopCount: 550,
                showCursor: true,
                cursorChar: "|",
                attr: null,
                contentType: "html",
            });
        }
        
        var typed_portfolio = $(".typed_portfolio");
        if (typed_portfolio.length > 0) {
            typed_portfolio.typed({
                strings: ["multi-niche experience", "worked on Technology", "worked on Architecture", "worked on Tourism", "worked on Calculator", "worked on Real Estate", "worked on Wedding", "worked on SmartPhones", "worked on Plumbing", "worked on Automotive"],
                stringsElement: null,
                typeSpeed: 70,
                startDelay: 150,
                backSpeed: 40,
                backDelay: 350,
                loop: true,
                loopCount: 550,
                showCursor: true,
                cursorChar: "|",
                attr: null,
                contentType: "html",
            });
        }

        // statistics jquery circle progressbar initialization
        var $section = $("#statisticsSection");

        // Ajax On Modal

    });

    $(window).on('load', function () {
        /*Preloader*/
        var preLoder = $("#preloader");
        preLoder.addClass('hide');
    });




});
