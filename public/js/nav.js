document.addEventListener("DOMContentLoaded", () => {
    let menuButton = document.getElementById("menu");
    let dropdown = document.getElementById("dropdown-nav-list");
    let burger = document.getElementById("burger");

    menuButton.addEventListener("click", () => {
        if (dropdown.style.display === "block") {
            dropdown.style.display = "none";
        } else {
            dropdown.style.display = "block";
        }
        burger.classList.toggle('open');
    });

    window.addEventListener("click", (event) => {
        if (!menuButton.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.style.display = "none";
            burger.classList.remove('open');
        }
    });
});