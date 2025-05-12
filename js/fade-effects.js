document.addEventListener('DOMContentLoaded', function () {
    const fadeElements = document.querySelectorAll('.fade-in-section');

    function checkFade() {
        fadeElements.forEach(element => {
            // Calculate the position relative to the viewport
            const rect = element.getBoundingClientRect();
            const viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);

            // If element is in viewport (with a little offset so it starts fading in before fully visible)
            if (!(rect.bottom < 0 || rect.top - viewHeight >= 0)) {
                element.classList.add('is-visible');
            } else {
                // Optional: remove the class if you want elements to fade out when scrolled away
                // element.classList.remove('is-visible');
            }
        });
    }

    // Run on initial load
    checkFade();

    // Run on scroll
    window.addEventListener('scroll', checkFade);

    // Run on resize
    window.addEventListener('resize', checkFade);
}); 