// scripts.js for scrolling product cards
document.addEventListener('DOMContentLoaded', function() {
    const scrollContainer = document.querySelector('.scroll-container');
    
    scrollContainer.style.scrollBehavior = 'smooth';

    // Optional: Add buttons for manual scrolling
    const leftButton = document.createElement('button');
    leftButton.textContent = '<';
    leftButton.classList.add('scroll-button', 'left');

    const rightButton = document.createElement('button');
    rightButton.textContent = '>';
    rightButton.classList.add('scroll-button', 'right');

    document.body.appendChild(leftButton);
    document.body.appendChild(rightButton);

    leftButton.addEventListener('click', function() {
        scrollContainer.scrollBy({
            top: 0,
            left: -200, // Adjust value as needed
            behavior: 'smooth'
        });
    });

    rightButton.addEventListener('click', function() {
        scrollContainer.scrollBy({
            top: 0,
            left: 200, // Adjust value as needed
            behavior: 'smooth'
        });
    });
});
