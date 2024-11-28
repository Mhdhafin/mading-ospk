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

// Swiper js
// var swiper = new Swiper(".mySwiper", {
//     slidesPerView: 1,
//     spaceBetween: 32,
//     loop: true,
//     centeredSlides: true,
//     pagination: {
//         el: ".swiper-pagination",
//         clickable: true,
//     },
//     autoplay: {
//         delay: 2500,
//         disableOnInteraction: false,
//     },
//     breakpoints: {
//         640: {
//             slidesPerView: 1,
//             spaceBetween: 32,
//         },
//         768: {
//             slidesPerView: 2,
//             spaceBetween: 32,
//         },
//         1024: {
//             slidesPerView: 3,
//             spaceBetween: 32,
//         },
//     },
// });

// Menampilkan Image
function previewImage() {
    const image = document.querySelector("#image");
    const imgPreview = document.querySelector(".img-preview");
    const label = document.querySelector("#label");

    // Menampilkan preview hanya jika file telah dipilih
    imgPreview.style.display = "block";
    label.style.display = "none";

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function (oFREvent) {
        imgPreview.src = oFREvent.target.result;
    };
}
