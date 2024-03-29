var slider = document.getElementById("priceslider");
noUiSlider.create(slider, {
    start: [250, 800],
    connect: !0,
    tooltips: !0,
    range: { min: 1, max: 1e3 },
});
var swiper = new Swiper(".slider", {
    nextButton: ".swiper-button-next",
    prevButton: ".swiper-button-prev",
    autoplay: { delay: 2e3 },
    loop: !0,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: { 768: { slidesPerView: 1 }, 1024: { slidesPerView: 1 } },
});
