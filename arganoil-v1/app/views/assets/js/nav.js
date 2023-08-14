const images = [
    'app/views/assets/images/image-nav/back1.png',
    'app/views/assets/images/image-nav/back2.png',
    'app/views/assets/images/image-nav/back3.png',
  ];
  
  let currentImageIndex = 0;
  
  function changeBackgroundImage() {
    const imageContainer = document.querySelector('.image-container');
    imageContainer.style.backgroundImage = `url(${images[currentImageIndex]})`;
    currentImageIndex = (currentImageIndex + 1) % images.length;
  }
  
  changeBackgroundImage();
  
  setInterval(changeBackgroundImage, 3000);
  
  
  var navbar = document.querySelector('Tabs-Box');
  
  // Add a scroll event listener
  window.addEventListener('scroll', function() {
      // Check the scroll position
      if (window.scrollY > 100) { // You can adjust the scroll threshold as needed
          navbar.classList.add('shrink');
      } else {
          navbar.classList.remove('shrink');
      }
  });