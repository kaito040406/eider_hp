$(function () {
    var pagetop = $('.page-top');

    $(window).scroll(function () {
        if ($(this).scrollTop() > 80) {
            pagetop.fadeIn(300);
        } else {
            pagetop.fadeOut(300);
        }
    });

    pagetop.click(function () {
        $('ody, html').animate({ scrollTop: 0 }, 500);
        return false;
    });
});

$(window).scroll(function () {
    var windowWidth = $(this).width();
    var windowHeight = $(this).height();
    var windowScrollTop = $(this).scrollTop();
    // effect - No2!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    var firstAnimation = function () {
        $('.clients .clients-info').each(
            function () {

                $(this).delay(500).animate(
                    { opacity: 1, height: '300', width: '1100' }, 2000);
            }
        );
    };
    if (windowWidth <= 549) {
        if (windowScrollTop > 600) {
            $('.clients').css('background-color', 'white');
            firstAnimation();
        }
    } else if (windowWidth > 549 && windowWidth <= 991) {
        if (windowScrollTop > 480) {
            $('.clients').css('background-color', 'white');
            firstAnimation();
        }
    } else {
        if (windowScrollTop > 450) {
            $('.clients').css('background-color', 'white');
            firstAnimation();
        }
    }
});

$(function () {

    // aimation呼び出し
    if ($('.main-course-item').length) {
        scrollAnimation();
    }

    // aimation関数
    function scrollAnimation() {
        $(window).scroll(function () {
            $(".main-course-item").each(function () {
                let position = $(this).offset().top,
                    scroll = $(window).scrollTop(),
                    windowHeight = $(window).height();

                if (scroll > position - windowHeight + 200) {
                    $(this).addClass('main-course-item-1');
                }
            });
        });
    }
    $(window).trigger('scroll');

});

$(function () {

    // aimation呼び出し
    if ($('.main-course-item-2').length) {
        scrollAnimation();
    }

    // aimation関数
    function scrollAnimation() {
        $(window).scroll(function () {
            $(".main-course-item-2").each(function () {
                let position = $(this).offset().top,
                    scroll = $(window).scrollTop(),
                    windowHeight = $(window).height();

                if (scroll > position - windowHeight + 200) {
                    $(this).addClass('main-course-item-3');
                }
            });
        });
    }
    $(window).trigger('scroll');

});

$(function () {

    // aimation呼び出し
    if ($('.main-course-item-4').length) {
        scrollAnimation();
    }

    // aimation関数
    function scrollAnimation() {
        $(window).scroll(function () {
            $(".main-course-item-4").each(function () {
                let position = $(this).offset().top,
                    scroll = $(window).scrollTop(),
                    windowHeight = $(window).height();

                if (scroll > position - windowHeight + 200) {
                    $(this).addClass('main-course-item-5');
                }
            });
        });
    }
    $(window).trigger('scroll');

});

$(function () {
    $(window).scroll(function () {
        const wHeight = $(window).height();
        const scrollAmount = $(window).scrollTop();
        $('.scrollanime').each(function () {
            const targetPosition = $(this).offset().top;
            if (scrollAmount > targetPosition - wHeight + 60) {
                $(this).addClass("fadeInDown");
            }
        });
    });
});



$(document).ready(function () {
    setInterval(rotateImages, 4000);
});

function rotateImages() {
    var curPhoto = $("#photoShow div.current");
    var nxtPhoto = curPhoto.next();

    if (nxtPhoto.length == 0) {
        nxtPhoto = $("#photoShow div:first");
    }

    curPhoto.removeClass("current").addClass("previous");
    nxtPhoto.css({ opacity: 0.0 }).addClass("current").animate({ opacity: 1.0 }, 1000,

        function () {
            curPhoto.removeClass("previous");
        });
}

$(function () {
    var $win = $(window),
        $header = $('.top-logo'),
        headerHeight = $header.outerHeight(),
        startPos = 0;

    $win.on('load scroll', function () {
        var value = $(this).scrollTop();
        if (value > startPos && value > headerHeight) {
            $header.css('top', '-' + headerHeight + 'px');
        } else {
            $header.css('top', '0');
        }
        startPos = value;
    });
});

$(function () {
    $('#login-show').click(function () {
        $('#login-modal').fadeIn();
    });

    $('.signup-show').click(function () {
        $('#signup-modal').fadeIn();
    });

    // 「.close-modal」要素にclickイベントを設定してください
    $('.close-modal').click(function () {
        $('#login-modal').fadeOut();
        $('#signup-modal').fadeOut();
    });

});
