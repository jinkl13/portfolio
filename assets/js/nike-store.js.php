var images = document.querySelectorAll('.image-container img');
var interval = 3000; // Change this to adjust the interval in milliseconds
var currentImageIndex = 0;

setInterval(function() {
  images[currentImageIndex].style.opacity = 0;
  currentImageIndex = (currentImageIndex + 1) % images.length;
  images[currentImageIndex].style.opacity = 1;
}, interval);