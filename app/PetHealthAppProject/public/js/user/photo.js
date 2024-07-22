document.addEventListener('DOMContentLoaded', function() {
    const input_img = document.getElementById("photo_address");
    const popup = document.getElementById("photo-popup");
    const popup_button = document.getElementsByClassName("popup-button");

    input_img.addEventListener("change",() => {
        popup.style.display = "block";
    });

    popup_button.addEventListener("click", () => {
        popup.style.display = "none";
    });
});