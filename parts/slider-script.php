<script>
    jQuery(document).ready(function($) {
        if ($(window).width() > 576) {
            const portfolioSlider = new Swiper('.portfolio__slider', {
                slidesPerView: 2,
                spaceBetween: 15,
                navigation: {
                prevEl: '.portfolio__arrow_prev',
                nextEl: '.portfolio__arrow_next',
                },
                scrollbar: {
                el: '.portfolio__scrollbar',
                draggable: true,
                },
                breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                }
            });
        }
    });
</script>