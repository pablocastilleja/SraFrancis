document.addEventListener("DOMContentLoaded", function() {
    let slides = document.querySelectorAll(".slide");
    let currentSlide = 0;

    function nextSlide() {
        slides[currentSlide].classList.remove("visible");
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.add("visible");
    }

    setInterval(nextSlide, 5000); // Cambia cada 5 segundos
});

function redirigirOrden() {
    var seleccion = document.getElementById("selectMenu").value;
    window.location.href = "orden.php?dia=" + seleccion;
  }