document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.querySelector('.carousel');
    const prevButton = document.querySelector('.carousel-prev');
    const nextButton = document.querySelector('.carousel-next');
    
    let scrollAmount = 0;
    const scrollStep = 270; // Define el desplazamiento en píxeles por cada clic (ancho de una tarjeta más el margen)

    prevButton.addEventListener('click', function() {
        if (scrollAmount > 0) {
            scrollAmount -= scrollStep;
        }
        carousel.style.transform = `translateX(-${scrollAmount}px)`;
    });

    nextButton.addEventListener('click', function() {
        const maxScroll = carousel.scrollWidth - carousel.clientWidth;
        if (scrollAmount < maxScroll) {
            scrollAmount += scrollStep;
        }
        carousel.style.transform = `translateX(-${scrollAmount}px)`;
    });
});
