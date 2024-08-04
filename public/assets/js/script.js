const profileButton = document.getElementById("profileButton");
const dropdownMenu = document.getElementById("dropdownMenu");

profileButton.addEventListener("click", () => {
    dropdownMenu.classList.toggle("hidden");
});

window.addEventListener("click", (e) => {
    if (!profileButton.contains(e.target)) {
        dropdownMenu.classList.add("hidden");
    }
});
