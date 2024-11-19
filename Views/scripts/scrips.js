// Preloader
document.addEventListener("DOMContentLoaded", function() {
    const preloader = document.getElementById("preloader");
    setTimeout(() => {
        preloader.style.display = "none";
    }, 1000); // Se oculta el preloader después de 1 segundo
});
