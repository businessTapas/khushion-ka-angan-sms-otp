$(window).scroll(function () {
    $(window).scrollTop() >= 200 ? $("header").addClass("sticky") : $("header").removeClass("sticky");
}),
    $(document).ready(function () {   
            setTimeout(function () {
                $('#onload_popup').modal('show');
            }, 10000)
               
            $("#testimonial").owlCarousel({ 
                items: 1, 
                loop: !0, 
                nav: !0, 
                navText: ["", ""], 
                dots: !1, 
                autoplay: !0, 
                autoplayHoverPause: !0, 
                autoplayTimeout: 5e3 
            }),
            $("#testimonialcsr").owlCarousel({ 
                items: 3, 
                loop: !0, 
                nav: !0, 
                navText: ["", ""], 
                dots: !1, 
                autoplay: !0, 
                autoplayHoverPause: !0, 
                autoplayTimeout: 5e3 
            }),
//             $('#testimonialcsr').owlCarousel({
//     loop:true,
//     margin:10,
//     responsiveClass:true,
//     responsive:{
//         0:{
//             items:1,
//             nav:true,
//             dots:false
//         },
//         600:{
//             items:3,
//             nav:true,
//             dots:false
//         },
//         1000:{
//             items:5,
//             nav:true,
//             loop:true,
//             dots:false
//         }
//     }
// }),
            
            $(window).scroll(function () {
                $(this).scrollTop() >= 50 ? $("#back-to-top").fadeIn(200) : $("#back-to-top").fadeOut(200);
            }),
            $("#back-to-top").click(function () {
                $("body,html").animate({ scrollTop: 0 }, 500);
            });
        var a = window.matchMedia("(max-width: 767px)");
        a.matches &&
            ($("html").click(function () {
                $(".feedback_form_area").slideUp();
            }),
            $("#feedback-form").click(function (a) {
                a.stopPropagation();
            }),
            $("#OpenForm").click(function (a) {
                $(".feedback_form_area").animate({ height: "toggle" }), $(".apply-btn").toggleClass("apply");
            }),
            $(".close-form").click(function () {
                $(".feedback_form_area").hide();
            }));
        var a = window.matchMedia("(min-width: 768px)");
        a.matches &&
            ($("html").click(function () {
                $(".feedback_form_area").hide(300);
            }),
            $("#feedback-form").click(function (a) {
                a.stopPropagation();
            }),
            $("#OpenForm").click(function (a) {
                $(".feedback_form_area").animate({ width: "toggle" });
            })),
            $(".input_container")
                .find(".floatlabel")
                .each(function () {
                    $(this).on("blur", function () {
                        ($this = $(this)), "" !== this.value ? $this.addClass("filled") : $this.removeClass("filled");
                    });
                });
    }),
    $(document).on("click", ".open-link", function () {
        767 > $(window).innerWidth() && ($(this).hasClass("active") ? ($(this).removeClass("active"), $(this).siblings("ul").slideUp(200)) : ($(this).addClass("active"), $(this).siblings("ul").slideDown(200)));
    }),
    $(window).on("load", function () {
        $(".loader").fadeOut("slow");
    });
    $(document).ready(function () {
        $("html, body").animate({ scrollTop: $("#scroll-div")?.offset()?.top - 205 }, "slow");
    });
var accordion = (function () {
    var a = $(".js-accordion").find(".js-accordion-header");
    $(".js-accordion-item");
    var b = { speed: 400, oneOpen: !1 };
    return {
        init: function (c) {
            a.on("click", function () {
                accordion.toggle($(this));
            }),
                $.extend(b, c),
                b.oneOpen && $(".js-accordion-item.active").length > 1 && $(".js-accordion-item.active:not(:first)").removeClass("active"),
                $(".js-accordion-item.active").find("> .js-accordion-body").show();
        },
        toggle: function (a) {
            b.oneOpen && a[0] != a.closest(".js-accordion").find("> .js-accordion-item.active > .js-accordion-header")[0] && a.closest(".js-accordion").find("> .js-accordion-item").removeClass("active").find(".js-accordion-body").slideUp(),
                a.closest(".js-accordion-item").toggleClass("active"),
                a.next().stop().slideToggle(b.speed);
        },
    };
})();
$(document).ready(function () {
    accordion.init({ speed: 300, oneOpen: !0 }),
        $(".scrolllink")
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function (b) {
                if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
                    var a = $(this.hash);
                    (a = a.length ? a : $("[name=" + this.hash.slice(1) + "]")).length && (b.preventDefault(), $("html, body").animate({ scrollTop: a.offset().top - 200 }, 1e3));
                }
            }),
        $(".emi-calculator-btn").click(function () {
            $(this).is(":checked") && ($(".emi-calculator").show(), $(".pmay-calculator").hide());
        }),
        $(".pmay-calculator-btn").click(function () {
            $(this).is(":checked") && ($(".emi-calculator").hide(), $(".pmay-calculator").show());
        }),
        $(".opentc").click(function () {
            $("#tcModal").modal("show");
        }),
        $(".news-slider").owlCarousel({
            loop: !0,
            margin: 0,
            dots: !1,
            nav: !0,
            navText: ["<span></span>", "<span></span>"],
            mouseDrag: !1,
            autoplay: !1,
            smartSpeed: 500,
            responsiveClass: !0,
            responsive: { 0: { items: 3 }, 700: { items: 4 }, 1e3: { items: 5 } },
        }),
        $(".slider-year").on("click", function () {
            $(".slider-year").removeClass("active-btn"), $(this).addClass("active-btn");
        }),
        $(".year-2021").on("click", function () {
            $("#year2021").removeClass("hide"),
                $("#year2020").addClass("hide"),
                $("#year2019").addClass("hide"),
                $("#year2018").addClass("hide"),
                $("#year2017").addClass("hide"),
                $("#year2016").addClass("hide"),
                $("#year2015").addClass("hide"),
                $("#year2014").addClass("hide");
        }),
        $(".year-2020").on("click", function () {
            $("#year2021").addClass("hide"),
                $("#year2020").removeClass("hide"),
                $("#year2019").addClass("hide"),
                $("#year2018").addClass("hide"),
                $("#year2017").addClass("hide"),
                $("#year2016").addClass("hide"),
                $("#year2015").addClass("hide"),
                $("#year2014").addClass("hide");
        }),
        $(".year-2019").on("click", function () {
            $("#year2021").addClass("hide"),
                $("#year2020").addClass("hide"),
                $("#year2019").removeClass("hide"),
                $("#year2018").addClass("hide"),
                $("#year2017").addClass("hide"),
                $("#year2016").addClass("hide"),
                $("#year2015").addClass("hide"),
                $("#year2014").addClass("hide");
        }),
        $(".year-2018").on("click", function () {
            $("#year2021").addClass("hide"),
                $("#year2020").addClass("hide"),
                $("#year2019").addClass("hide"),
                $("#year2018").removeClass("hide"),
                $("#year2017").addClass("hide"),
                $("#year2016").addClass("hide"),
                $("#year2015").addClass("hide"),
                $("#year2014").addClass("hide");
        }),
        $(".year-2017").on("click", function () {
            $("#year2021").addClass("hide"),
                $("#year2020").addClass("hide"),
                $("#year2019").addClass("hide"),
                $("#year2018").addClass("hide"),
                $("#year2017").removeClass("hide"),
                $("#year2016").addClass("hide"),
                $("#year2015").addClass("hide"),
                $("#year2014").addClass("hide");
        }),
        $(".year-2016").on("click", function () {
            $("#year2021").addClass("hide"),
                $("#year2020").addClass("hide"),
                $("#year2019").addClass("hide"),
                $("#year2018").addClass("hide"),
                $("#year2017").addClass("hide"),
                $("#year2016").removeClass("hide"),
                $("#year2015").addClass("hide"),
                $("#year2014").addClass("hide");
        }),
        $(".year-2015").on("click", function () {
            $("#year2021").addClass("hide"),
                $("#year2020").addClass("hide"),
                $("#year2019").addClass("hide"),
                $("#year2018").addClass("hide"),
                $("#year2017").addClass("hide"),
                $("#year2016").addClass("hide"),
                $("#year2015").removeClass("hide"),
                $("#year2014").addClass("hide");
        }),
        $(".year-2014").on("click", function () {
            $("#year2021").addClass("hide"),
                $("#year2020").addClass("hide"),
                $("#year2019").addClass("hide"),
                $("#year2018").addClass("hide"),
                $("#year2017").addClass("hide"),
                $("#year2016").addClass("hide"),
                $("#year2015").addClass("hide"),
                $("#year2014").removeClass("hide");
        });
}),
    $(window).scroll(function () {
        $(window).scrollTop() >= 300 ? $(".tab-fixed").addClass("tab-scroll-fixed") : $(".tab-fixed").removeClass("tab-scroll-fixed");
    }),
    $(".fa-heart-o").click(function () {
        $(this).removeClass("fa-heart-o"), $(this).addClass("fa-heart");
    }),
    $(".applynowbtn").click(function (a) {
        a.preventDefault();
        var b = $(this).attr("href");
        $.ajax({
            url: "/check_ip.php",
            type: "post",
            success: function (a) {
                "OUT" == a.split("###")[1] ? (window.location.href = "/error-page.php") : "" == b ? (window.location.href = "/apply-now.php") : (window.location.href = "" + b);
            },
        });
    }),
    $("document").ready(function () {
        $(".hiddenDesktop").attr("href", "");
        var d = window.location.href,
            a = new URL(d).pathname,
            b = $("#session_show_form").val(),
            c = $("#session_lsq_status").val();
        !0 == a.includes("home-loan") && !1 == a.includes("blogs/")
            ? "0" == b
                ? "0" == c
                    ? $(".hiddenDesktop").attr("href", "/apply-now/index.php")
                    : $(".hiddenDesktop").attr("href", "https://apply-home-loan.grihumhousing.com/")
                : $(".hiddenDesktop").attr("href", "javascript:void(0)")
            : (!0 == a.includes("loan-against-property") || !0 == a.includes("lap-")) && !1 == a.includes("blogs/")
            ? "0" == b
                ? "0" == c
                    ? $(".hiddenDesktop").attr("href", "/apply-now/index.php")
                    : $(".hiddenDesktop").attr("href", "https://apply-home-loan.grihumhousing.com/")
                : $(".hiddenDesktop").attr("href", "javascript:void(0)")
            : (!0 == a.includes("pmay") || !0 == a.includes("home-improvement-loan") || !0 == a.includes("home-extension-loan")) && !1 == a.includes("blogs/")
            ? "0" == b
                ? "0" == c
                    ? $(".hiddenDesktop").attr("href", "/apply-now/index.php")
                    : $(".hiddenDesktop").attr("href", "https://apply-home-loan.grihumhousing.com/")
                : $(".hiddenDesktop").attr("href", "javascript:void(0)")
            : $(".hiddenDesktop").attr("href", "/apply-now.php"),
            $(".breadcrumbdiv li.breadcrumb-item a").each(function (a, b) {
                "blogs.php" == $(this).attr("href") && $(".hiddenDesktop").attr("href", "/apply-now.php");
            });
    }),
    $(".tab-menu a").mouseover(function () {
        $(this).tab("show");
    }),
    $(".tab-menu a").on("show.bs.tab", function (a) {
        let b = a.relatedTarget.getAttribute("href");
        $(b).removeClass("active");
    }),
    $(document).ready(function () {
        $("#subscribe_form").validate({
            rules: { name: { required: !0, minlength: 2, maxlength: 49 }, email: { required: !0, email: !0 } },
            messages: { name: { required: "Enter a valid name", minlength: "Enter a valid name", maxlength: "Enter a valid name" }, email: { required: "Enter a valid email ID", email: "Enter a valid email ID" } },
            submitHandler: function (a) {
                $("#btn-sub").attr("disabled", !0);
                var b = $(a).serialize();
                $.ajax({
                    url: "/submit_subscribe.php",
                    type: "POST",
                    data: b,
                    success: function (c) {
                        var b = c.split("###");
                        "Success" == b[1]
                            ? ($(a)[0].reset(),
                              $("#btn-sub").attr("disabled", !1),
                              $(".popup_overlay").fadeIn(200, function () {
                                  $(".popup").addClass("active");
                              }))
                            : "Failed2" == b[1]
                            ? alert("" + b[2])
                            : alert("Something went wrong");
                    },
                });
            },
        }),
            $("#ftsubscribe_form").validate({
                rules: { email: { required: !0, email: !0 } },
                messages: { email: { required: "Enter a valid email ID", email: "Enter a valid email ID" } },
                submitHandler: function (a) {
                    $("#btn-ftsub").attr("disabled", !0);
                    var b = $(a).serialize();
                    $.ajax({
                        url: "/submit_subscribe.php",
                        type: "POST",
                        data: b,
                        success: function (c) {
                            var b = c.split("###");
                            "Success" == b[1]
                                ? ($(a)[0].reset(),
                                  $("#btn-ftsub").attr("disabled", !1),
                                  $(".popup_overlay").fadeIn(200, function () {
                                      $(".popup").addClass("active");
                                  }))
                                : "Failed2" == b[1]
                                ? alert("" + b[2])
                                : alert("Something went wrong");
                        },
                    });
                },
            }),
            $(document).on("click", ".close_popup", function () {
                $(".popup").removeClass("active"), $(".popup_overlay").delay(300).fadeOut(350);
            }),
            $(document).on("click", ".sub_ok", function () {
                $(".popup").removeClass("active"), $(".popup_overlay").delay(300).fadeOut(350);
            }),
            $(".LettersOnlysub").on("input", function (a) {
                this.value = this.value.replace(/[^a-zA-Z. ]/g, "");
            });
    });