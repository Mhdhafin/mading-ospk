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

// Menghilangkan alert setelah 5 detik (5000 milidetik)
// setTimeout(function () {
//     var alertBox = document.getElementById("alert-box");
//     if (alertBox) {
//         alertBox.style.transition = "opacity 0.5s ease";
//         alertBox.style.opacity = "0";
//         setTimeout(function () {
//             alertBox.style.display = "none";
//         }, 500); // Mengatur display ke 'none' setelah animasi selesai
//     }
// }, 5000);

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
