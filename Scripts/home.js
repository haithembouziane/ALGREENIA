document.addEventListener("DOMContentLoaded", function () {
    let hasCounted = false;

    function countUp(element) {
        const targetValue = parseInt(element.getAttribute("data-value"));
        let currentValue = 0;
        const increment = Math.ceil(targetValue / 100); 

        const interval = setInterval(() => {
            currentValue += increment;
            if (currentValue >= targetValue) {
                currentValue = targetValue;
                clearInterval(interval);
            } 
            element.textContent = currentValue;
        }, 70); // Adjust duration as needed
    }

    window.addEventListener("scroll", () => {
        const statsSection = document.querySelector("#stat");
        const sectionPosition = statsSection.getBoundingClientRect().top;
        const statNumbers = document.querySelectorAll(".stat-value");
        if (sectionPosition < window.innerHeight && !hasCounted) {
            hasCounted = true;
            statNumbers.forEach(countUp);
        }
    });
      

    // Select elements
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const carouselContainer = document.querySelector('.project-card-container');
    const cards = document.querySelectorAll('.project-card');

    let currentIndex = 0;
    let cardWidth = cards[0].offsetWidth + 40; // Width of each card including margins
    let totalCards = cards.length;

    // Clone first and last cards for infinite effect
    const firstClone = cards[0].cloneNode(true);
    const lastClone = cards[totalCards - 1].cloneNode(true);

    carouselContainer.appendChild(firstClone);
    carouselContainer.insertBefore(lastClone, cards[0]);

    // Update the number of total cards including the clones
    totalCards += 2;

    // Position the carousel initially to show the first real card
    carouselContainer.style.transform = `translateX(${-cardWidth}px)`;

    // Function to update the carousel
    function updateCarousel() {
        carouselContainer.style.transition = 'transform 0.5s ease-in-out';
        carouselContainer.style.transform = `translateX(${-cardWidth * currentIndex}px)`;

        // Handle the infinite scroll effect after the transition
        carouselContainer.addEventListener('transitionend', () => {
            if (currentIndex === totalCards - 1) {
                // Jump to the first real card without showing the jump
                carouselContainer.style.transition = 'none';
                currentIndex = 1;
                carouselContainer.style.transform = `translateX(${-cardWidth}px)`;
            } else if (currentIndex === 0) {
                // Jump to the last real card without showing the jump
                carouselContainer.style.transition = 'none';
                currentIndex = totalCards - 2;
                carouselContainer.style.transform = `translateX(${-cardWidth * currentIndex}px)`;
            }
        });
    }

    // Next button functionality
    nextBtn.addEventListener('click', () => {
        if (currentIndex < totalCards - 1) {
            currentIndex++;
        }
        updateCarousel();
    });

    // Previous button functionality
    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
        }
        updateCarousel();
    });

    // Optional: Resize listener to handle changes in card width (if window is resized)
    window.addEventListener('resize', () => {
        cardWidth = cards[0].offsetWidth + 30; // Update width calculation on resize
        carouselContainer.style.transform = `translateX(${-cardWidth * currentIndex}px)`; // Recalculate position
    });

});