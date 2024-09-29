document.addEventListener('DOMContentLoaded', function () {
    const genresWrapper = document.querySelector('.genres-wrapper');

    // Botones de scroll en cada tarjeta
    const scrollLeftButtons = document.querySelectorAll('.scroll-left');
    const scrollRightButtons = document.querySelectorAll('.scroll-right');

    scrollLeftButtons.forEach(button => {
        button.addEventListener('click', function () {
            genresWrapper.scrollBy({
                left: -200, // Cantidad de píxeles a desplazar
                behavior: 'smooth'
            });
        });
    });

    scrollRightButtons.forEach(button => {
        button.addEventListener('click', function () {
            genresWrapper.scrollBy({
                left: 200, // Cantidad de píxeles a desplazar
                behavior: 'smooth'
            });
        });
    });
});
