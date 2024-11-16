window.addEventListener("DOMContentLoaded", () => {
    const loader = document.getElementById("loader");
    if (loader) loader.style.display = "none";

    DarkMode()
});

function DarkMode() {
    document.documentElement.className = "dark";
    document.documentElement.setAttribute("data-theme", "dark");
}


