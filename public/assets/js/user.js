const popupClose = document.querySelector(".popup-close");
popupClose.addEventListener("click", function () {
    const popup = document.querySelector(".popup");

    popup.style.display = "none";
});
