window.addEventListener("resize", () => {
    const dropdown = document.getElementById("dropdown-nav-list");
    const burger = document.getElementById("burger");
    dropdown.style.display = "none";
    burger.classList.remove('open');
});

document.addEventListener("DOMContentLoaded", () => {
    const menuButton = document.getElementById("menu");
    const dropdown = document.getElementById("dropdown-nav-list");
    const burger = document.getElementById("burger");

    menuButton.addEventListener("click", () => {
        const isDropdownVisible = dropdown.style.display === "block";
        dropdown.style.display = isDropdownVisible ? "none" : "block";
        burger.classList.toggle('open', !isDropdownVisible);
    });

    window.addEventListener("click", (event) => {
        if (!menuButton.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.style.display = "none";
            burger.classList.remove('open');
        }
    });
});
