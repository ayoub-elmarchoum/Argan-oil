window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    const scrolled = window.scrollY > 0;
    navbar.classList.toggle("scrolled", scrolled);
});

const images = ["app\views\assets\images\image-nav\back2.png", "app\views\assets\images\image-nav\back3.png", "app\views\assets\images\image-nav\back2.png"]; // Liste de vos images
const imgElement = document.querySelector(".img");
const prevBtn = document.getElementById("prev-btn");
const nextBtn = document.getElementById("next-btn");

let currentImageIndex = 0;

// Fonction pour afficher l'image courante
function displayCurrentImage() {
    imgElement.src = images[currentImageIndex];
}

// Fonction pour passer à l'image suivante
function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    displayCurrentImage();
}

// Fonction pour passer à l'image précédente
function prevImage() {
    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    displayCurrentImage();
}

// Écouteurs d'événements pour les boutons
nextBtn.addEventListener("click", nextImage);
prevBtn.addEventListener("click", prevImage);

// Défilement automatique
function autoSlide() {
    nextImage();
}

// Démarrez le défilement automatique toutes les 5 secondes (5000 millisecondes)
setInterval(autoSlide, 3000);
