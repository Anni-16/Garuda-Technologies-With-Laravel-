// ====== Service hover Images Change ======
document.addEventListener("DOMContentLoaded", function () {
    const services = document.querySelectorAll(".service-hover");
    const previewImage = document.getElementById("service-preview");

    services.forEach((service) => {
        service.addEventListener("mouseenter", function () {
            const newImage = this.getAttribute("data-image");
            if (newImage) {
                previewImage.src = newImage;
            }
        });
    });
});

// ====== Service hover Images Change ======

/* ======= garuda technologies to garuviaflytech pop Js ====== */
document.addEventListener("DOMContentLoaded", function () {
    const overlay = document.getElementById("garuviaPopupOverlay");
    const closeButton = document.getElementById("garuviaPopupClose");

    function closePopup() {
        overlay.style.display = "none";
    }

    closeButton.addEventListener("click", closePopup);
});
