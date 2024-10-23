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
});