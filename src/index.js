import Macy from 'macy';
import '../css/style.css';

window.addEventListener('load', () => {
  const preloader = document.querySelector('#preloader');
  preloader.classList.remove('active');
});

document.addEventListener('DOMContentLoaded', () => {
  // MOBILE NAVIGATION
  const menuBtn = document.getElementById('menu-btn');
  const closeBtn = document.getElementById('close-btn');
  const nav = document.getElementById('nav');
  menuBtn.addEventListener('click', () => {
    nav.classList.add('open-nav');
  });

  closeBtn.addEventListener('click', () => {
    nav.classList.remove('open-nav');
  });

  nav.addEventListener('click', (event) => {
    if (event.target.tagName === 'A' || event.target.tagName === 'SPAN') {
      nav.classList.remove('open-nav');
    }
  });

  const body = document.body;
  if (!body.classList.contains('home')) {
    // Not a front page
    return;
  }

  const macy = Macy({
    container: '.reviews',
    trueOrder: false,
    waitForImages: false,
    columns: 4,
    margin: 25,
    breakAt: {
      1200: 3,
      940: 2,
      550: 1,
    },
  });

  // Disable smooth scrolling on firefox for android (there is a bug)
  const isFirefox = /Android.+Firefox\//.test(navigator.userAgent);
  if (isFirefox) {
    document.documentElement.style.scrollBehavior = 'auto';
  }

  // ACTIVE SECTION INDICATOR BASED ON URL HASH
  const VALID_SECTION_NAMES = [
    'home',
    'gallery',
    'reviews',
    'reservation',
    'contact',
  ];
  window.addEventListener('hashchange', () => {
    let urlHash = window.location.hash.toLowerCase();
    if (!urlHash) {
      urlHash = '#home';
    }

    if (!VALID_SECTION_NAMES.includes(urlHash.slice(1))) {
      return;
    }

    const activeLink = document.querySelector('#nav .active');
    if (activeLink) {
      activeLink.classList.remove('active');
    }

    const newActiveLink = document.querySelector(`#nav a[href$='${urlHash}']`);
    if (newActiveLink) {
      newActiveLink.parentNode.classList.add('active');
    }
  });

  // ACTIVE SECTION INDICATOR BASED ON SECTION VISIBILITY
  const sections = document.querySelectorAll(
    '#home, #gallery, #reviews, #reservation, #contact'
  );

  const width = window.innerWidth;
  let intersectionRatio = 0.5;
  if (width <= 500) {
    intersectionRatio = 0.1;
  }

  const observer = new IntersectionObserver(
    (entries) => {
      entries.map((entry) => {
        const link = document.querySelector(
          `#nav a[href$='${'#' + entry.target.id}']`
        );
        if (
          entry.isIntersecting &&
          entry.intersectionRatio > intersectionRatio
        ) {
          document.querySelector('#nav .active').classList.remove('active');
          link.parentElement.classList.add('active');
        }
      });
    },
    { threshold: intersectionRatio }
  );
  sections.forEach((section) => {
    observer.observe(section);
  });

  // CONTACT - WORKING HOURS INDICATOR
  const businessStatus = document.querySelector('.business-status');
  const workingHours = document.querySelectorAll('.working-hours > li');

  const date = new Date();
  let day = date.getDay();
  if (day === 0) {
    day = 6;
  } else {
    day = day - 1;
  }
  workingHours[day].classList.add('active');

  const hours = date.getHours();
  let msg = 'otvoreno';
  if (day === 6) {
    msg = 'zatvoreno';
  } else if (day === 5) {
    msg = 8 <= hours && 18 > hours ? 'otvoreno' : 'zatvoreno';
  } else {
    msg = 8 <= hours && 22 > hours ? 'otvoreno' : 'zatvoreno';
  }
  businessStatus.textContent = msg;
});
