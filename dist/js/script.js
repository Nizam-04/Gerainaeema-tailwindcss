// Variable Section Start
  // Variable For Navbar Fixed
  // Variable Already Created At Navbar Fixed Section

  // Variable For Hamburger
  const hamburger = document.querySelector('#hamburger');

  // Variable For Navigation Menu
  const navMenu = document.querySelector('#nav-menu');

  // Variable For Slider
  const slideImage = document.querySelectorAll('.slide-image');
  const slidesContainer = document.querySelector('.slides-container');
  const nextBtn = document.querySelector('.next-btn');
  const prevBtn = document.querySelector('.prev-btn');
  const navigationDots = document.querySelector('.navigation-dots');
  let numberOfImages = slideImage.length;
  let slideWidth = slideImage[0].clientWidth;
  let currentSlide = 0;
// Variable Section End

// Navbar Fixed Start
window.onscroll = function() {
  const header = document.querySelector('header');
  const fixedNav = header.offsetTop;

  if(window.pageYOffset > fixedNav) {
    header.classList.add('navbar-fixed');
  } else {
    header.classList.remove('navbar-fixed');
  }
}
// Navbar Section End

// Hamburger Section Start
hamburger.addEventListener('click', function() {
  hamburger.classList.toggle('hamburger-active');
  navMenu.classList.toggle('hidden');
});
// Hamburger Section End

// Slider Section Start
// Set Up The Slider
setInterval(() => {nextBtn.click();}, 4000);

function init() {
  /*
    slideImage[0] = 0
    slideImage[1] = 100%
    slideImage[2] = 200%
  */
 
 slideImage.forEach((img, i) => {
  img.style.left = i * 100 + '%';
 });

 slideImage[0].classList.add('active');

 createNavigationDots();
}

init();

// Create Navigation Dots
function createNavigationDots() {
  for(let i = 0; i < numberOfImages; i++) {
    const dot = document.createElement('div');
    dot.classList.add('single-dot');
    navigationDots.appendChild(dot);
    dot.addEventListener('click', () => {
      goToSlide(i);
    });
  } 

  navigationDots.children[0].classList.add('active');
}

// Next Button
nextBtn.addEventListener('click', () => {
  if(currentSlide >= numberOfImages - 1) {
    goToSlide(0);
    return;
  }
  currentSlide++;
  goToSlide(currentSlide);
});

// Previous Button
prevBtn.addEventListener('click', () => {
  if(currentSlide <= 0) {
    goToSlide(numberOfImages - 1);
    return;
  }
  currentSlide--;
  goToSlide(currentSlide);
});

// Go To Slide
function goToSlide(slideNumber) {
  slidesContainer.style.transform = 'translateX(-' + slideWidth * slideNumber + 'px)';
  currentSlide = slideNumber;
  setActiveClass();
}

// Set Active Class
function setActiveClass() {
  // Set active Class For Slide Image
  let currentActive = document.querySelector('.slide-image.active');
  currentActive.classList.remove('active');
  slideImage[currentSlide].classList.add('active');

  // Set active Class For Navigation Dots
  let currentDot = document.querySelector('.single-dot.active');
  currentDot.classList.remove('active');
  navigationDots.children[currentSlide].classList.add('active');
}
// Slider Section End