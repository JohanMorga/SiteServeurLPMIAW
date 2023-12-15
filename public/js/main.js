//si la fenetre est plus petite que 1024px
function testTaille() {
    if (window.matchMedia("(max-width: 1024px)").matches) {
        document.querySelectorAll('.swiper-slide'
        ).forEach(function (el) {
            el.classList.remove('swiper-slide');
        });
        document.querySelectorAll('.swiper-wrapper'
        ).forEach(function (el) {
            el.classList.remove('swiper-wrapper');
        });
        document.querySelectorAll('.swiper-pagination'
        ).forEach(function (el) {
            el.classList.remove('swiper-pagination');
        });
        document.querySelectorAll('.swiper'
        ).forEach(function (el) {
            el.classList.remove('swiper');
        });
        document.querySelectorAll('.slide-content'
        ).forEach(function (el) {
            el.classList.remove('slide-content');
        });
    }
    else {
        document.querySelectorAll('.slide-content'
        ).forEach(function (el) {
            el.classList.add('slide-content');
        });
        document.querySelectorAll('.swiper'
        ).forEach(function (el) {
            el.classList.add('swiper');
        });
        document.querySelectorAll('.swiper-pagination'
        ).forEach(function (el) {
            el.classList.add('swiper-pagination');
        });
        document.querySelectorAll('.swiper-wrapper'
        ).forEach(function (el) {
            el.classList.add('swiper-wrapper');
        });
        document.querySelectorAll('.swiper-slide'
        ).forEach(function (el) {
            el.classList.add('swiper-slide');
        });
    }
}

window.addEventListener('resize', function () {
    testTaille();
});
var swiper = new Swiper(".swiper", {
    direction: 'vertical',
    speed: 1000,
    slidesPerView: 1,
    noSwiping: false,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    mousewheel: true,
    autoHeight: true,

});
testTaille();