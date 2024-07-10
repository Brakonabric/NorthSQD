document.addEventListener("DOMContentLoaded", () => {
    let menuButton = document.getElementById("menu");
    let dropdown = document.getElementById("dropdown-nav-list");

    menuButton.addEventListener("click", () => {
        if (dropdown.style.display === "grid") {
            dropdown.style.display = "none";
        } else {
            dropdown.style.display = "grid";
        }
    });

    window.addEventListener("click", (event) => {
        if (!menuButton.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.style.display = "none";
        }
    });
});
