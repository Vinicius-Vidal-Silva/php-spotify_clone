document.addEventListener("DOMContentLoaded", function() {
    const carouselContainer = document.querySelector('.carousel-container');
    const carousel = document.getElementById('carousel');
    const images = carousel.querySelectorAll('img');
    const arrowLeft = document.getElementById('prevButton'); // Alterado para a imagem da seta para a esquerda
    const arrowRight = document.getElementById('nextButton'); // Alterado para a imagem da seta para a direita
    
    const imageWidth = images[0].clientWidth; // Largura de cada imagem
    let currentIndex = 0;

    function updateCarousel() {
        const newPosition = currentIndex * imageWidth;
        carouselContainer.scrollTo({
            left: newPosition,
            behavior: 'smooth'
        });
    }

    // Event listener para a imagem da seta para a esquerda
    arrowLeft.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateCarousel();
    });

    // Event listener para a imagem da seta para a direita
    arrowRight.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % images.length;
        updateCarousel();
    });
});
