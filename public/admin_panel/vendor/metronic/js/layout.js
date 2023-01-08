/**
 Core script to handle the entire theme and core functions
 **/
var Layout = function () {

    function getResponsiveBreakpoint(size) {
        // bootstrap responsive breakpoints
        var sizes = {
            'xs': 480, // extra small
            'sm': 768, // small
            'md': 992, // medium
            'lg': 1200     // large
        };

        return sizes[size] ? sizes[size] : 0;
    }
    var resBreakpointMd = getResponsiveBreakpoint('md');

    // handle on page scroll
    var handleHeaderOnScroll = function () {
        if ($(window).scrollTop() > 60) {
            $("body").addClass("page-on-scroll");
        } else {
            $("body").removeClass("page-on-scroll");
        }
    };

    function getViewPort() {
        var e = window,
                a = 'inner';
        if (!('innerWidth' in window)) {
            a = 'client';
            e = document.documentElement || document.body;
        }

        return {
            width: e[a + 'Width'],
            height: e[a + 'Height']
        };
    }

    // Handles active menu to avoid closing click to content

    // handle go to top button
    var handleGo2Top = function () {
        var Go2TopOperation = function () {
            var CurrentWindowPosition = $(window).scrollTop();// current vertical position
            if (CurrentWindowPosition > 100) {
                $(".go2top").show();
            } else {
                $(".go2top").hide();
            }
        };

        Go2TopOperation();// call headerFix() when the page was loaded
        if (navigator.userAgent.match(/iPhone|iPad|iPod/i)) {
            $(window).bind("touchend touchcancel touchleave", function (e) {
                Go2TopOperation();
            });
        } else {
            $(window).scroll(function () {
                Go2TopOperation();
            });
        }

        $(".go2top").click(function (e) {
            e.preventDefault();
            $("html, body").animate({scrollTop: 0}, 600);
        });
    };

    var handleHeaderMenu = function () {
        var viewPortWidth = getViewPort().width;

        $('.page-header .navbar-nav > .dropdown-fw, .page-header .navbar-nav > .more-dropdown, .page-header .navbar-nav > .dropdown > .dropdown-menu  > .dropdown').click(function (e) {

            if (viewPortWidth > resBreakpointMd) {
                if ($(this).hasClass('more-dropdown') || $(this).hasClass('more-dropdown-sub')) {
                    return;
                } else {
                    e.stopPropagation();
                }
            } else {
                e.stopPropagation();
            }

            var links = $(this).parent().find('> .dropdown');

            if (viewPortWidth < resBreakpointMd) {
                if ($(this).hasClass('open')) {
                    links.removeClass('open');
                } else {
                    links.removeClass('open');
                    $(this).addClass('open');
                    scrollTo($(this),0);
                }
            } else {
                if ($(this).hasClass('more-dropdown')) {
                    return;
                }
                links.removeClass('open');
                $(this).addClass('open');
                scrollTo($(this),0);
            }
        });
    };

    // Handles main menu on window resize
    var handleMainMenuOnResize = function () {
        // handle hover dropdown menu for desktop devices only
        var width = getViewPort().width;
        var menu = $(".page-header .navbar-nav");
        if (width >= resBreakpointMd && menu.data('breakpoint') !== 'desktop') {
            menu.data('breakpoint', 'desktop');
            $('[data-hover="extended-dropdown"]', menu).not('.hover-initialized').each(function () {
                $(this).dropdownHover();
                $(this).addClass('hover-initialized');
            });
        } else if (width < resBreakpointMd && menu.data('breakpoint') !== 'mobile') {
            menu.data('breakpoint', 'mobile');
            // disable hover bootstrap dropdowns plugin
            $('[data-hover="extended-dropdown"].hover-initialized', menu).each(function () {
                $(this).unbind('hover');
                $(this).parent().unbind('hover').find('.dropdown-submenu').each(function () {
                    $(this).unbind('hover');
                });
                $(this).removeClass('hover-initialized');
            });
        }
    };

    return {
        init: function () {
            handleGo2Top();
            handleHeaderOnScroll();
            handleHeaderMenu();
            handleMainMenuOnResize();
//            App.addResizeHandler(handleMainMenuOnResize); // handle main menu on window resize

            // handle minimized header on page scroll
            $(window).scroll(function () {
                handleHeaderOnScroll();
            });
        },
        scrollTo: function (el, offeset) {
            var pos = (el && el.size() > 0) ? el.offset().top : 0;

            if (el) {
                if ($('body').hasClass('page-header-fixed')) {
                    pos = pos - $('.page-header').height();
                } else if ($('body').hasClass('page-header-top-fixed')) {
                    pos = pos - $('.page-header-top').height();
                } else if ($('body').hasClass('page-header-menu-fixed')) {
                    pos = pos - $('.page-header-menu').height();
                }
                pos = pos + (offeset ? offeset : -1 * el.height());
            }

            $('html,body').animate({
                scrollTop: pos
            }, 'slow');
        }
    };

}();

jQuery(document).ready(function () {
    Layout.init(); // init metronic core componets
});