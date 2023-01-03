const tabsContainer = document.querySelector('.about-tabs');
const aboutSection = document.querySelector('.about-section');
tabsContainer.addEventListener('click', e => {
  if (
    e.target.classList.contains('tab-item') &&
    !e.target.classList.contains('active')
  ) {
    console.log(tabsContainer);
    tabsContainer.querySelector('.active').classList.remove('active');
    e.target.classList.add('active');

    const target = e.target.getAttribute('data-target');
    aboutSection
      .querySelector('.tab-content.active')
      .classList.remove('active');
    aboutSection.querySelector(target).classList.add('active');
  }
});

const navToggler = document.querySelector('.nav-toggler');
navToggler.addEventListener('click', () => {
  hideSection();
  toggleNavbar();
});
function hideSection() {
  console.log(document.querySelector('div.main-item.active'));
  document.querySelector('div.main-item.active').classList.toggle('fade-out');
}
function toggleNavbar() {
  document.querySelector('.header').classList.toggle('active');
}

document.addEventListener('click', e => {
  if (e.target.classList.contains('link-item') && e.target.hash !== '') {
    navToggler.classList.add('hide');
    if (e.target.classList.contains('nav-item')) {
      console.log('truee');
      toggleNavbar();
    } else {
      hideSection();
    }
    setTimeout(() => {
      document
        .querySelector('div.container-fluid.active')
        .classList.remove('active', 'fade-out');
      document.querySelector(e.target.hash).classList.add('active');
      window.scrollTo(0, 0);
      navToggler.classList.remove('hide');
    }, 50);
  }
});

// loading
window.addEventListener('load', function () {
  document.querySelector('div.home.main-item').classList.remove('invisible');
  $('div.home.main-item').addClass('active');

  $('.page-loader').fadeOut();
  this.setTimeout(() => {
    $('.page-loader').style.display = 'none';
  }, 600);
});

document.addEventListener('click', e => {
  if (e.target.classList.contains('view-project-btn')) {
    togglePortfolioPopup();
    document.querySelector('.portfolio-popup').scrollTo(0, 0);
    portfolioItemDetails(e.target.parentElement);
  }
});
document
  .querySelector('.pp-close')
  .addEventListener('click', togglePortfolioPopup);

function togglePortfolioPopup() {
  document.querySelector('.portfolio-popup').classList.toggle('open');
  document.querySelector('.portfolio-section').classList.add('more-opacity');
  $('.portfolio-section').toggle();
  $('.header').toggle();
}
function portfolioItemDetails(portfolioItem) {
  document.querySelector('.pp-thumbnail img').src = portfolioItem.querySelector(
    '.portfolio-item-thumbnail img'
  ).src;

  document.querySelector('.pp-header h3').innerHTML =
    portfolioItem.querySelector('.portfolio-item-title').innerHTML;

  document.querySelector('.pp-body').innerHTML = portfolioItem.querySelector(
    '.portfolio-item-details'
  ).innerHTML;
}

// hide popup when clicking outside
document.addEventListener('click', e => {
  if (e.target.classList.contains('pp-inner')) {
    togglePortfolioPopup();
  }
});
