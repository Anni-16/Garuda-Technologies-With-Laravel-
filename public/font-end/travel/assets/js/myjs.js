// ====== Service hover Images Change ======
document.addEventListener("DOMContentLoaded", function () {
  const services = document.querySelectorAll(".service-hover");
  const previewImage = document.getElementById("service-preview");

  services.forEach(service => {
    service.addEventListener("mouseenter", function () {
      const newImage = this.getAttribute("data-image");
      if (newImage) {
        previewImage.src = newImage;
      }
    });
  });
});

// ====== Service hover Images Change ======