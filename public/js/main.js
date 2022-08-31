AOS.init({
  once: true,
  disable: 'phone',
  duration: 750,
  easing: 'ease-out-quart',
});

const carouselEl = document.querySelectorAll('.carousel');
if (carouselEl.length > 0) {
  const carousel = new Swiper('.carousel', {
    slidesPerView: 'auto',
    grabCursor: true,
    loop: true,
    centeredSlides: true,
    initialSlide: 1,
    spaceBetween: 24,
    autoplay: {
      delay: 7000,
    },
    navigation: {
      nextEl: '.carousel-next',
      prevEl: '.carousel-prev',
    },
  });
}

// Light switcher
const lightSwitches = document.querySelectorAll('.light-switch');
let logo = document.querySelector('#logo');
let logoMobile = document.querySelector('#logo-mobile');
let logoFooter = document.querySelector('#logo-footer');
if (lightSwitches.length > 0) {
  lightSwitches.forEach((lightSwitch, i) => {
    if (localStorage.getItem('dark-mode') === 'true' || !('dark-mode' in localStorage)) {
      // eslint-disable-next-line no-param-reassign
      lightSwitch.checked = true;
      logo.src = "/images/logo.png";
      logoMobile.src = "/images/logo.png";
      logoFooter.src = "/images/logo-negro-blck.png";
      
    }
    lightSwitch.addEventListener('change', () => {
      const { checked } = lightSwitch;
      lightSwitches.forEach((el, n) => {
        if (n !== i) {
          // eslint-disable-next-line no-param-reassign
          el.checked = checked;
        }
      });
      if (lightSwitch.checked) {
        document.documentElement.classList.add('dark');
        localStorage.setItem('dark-mode', true);
        logo.src = "/images/logo.png";
        logoMobile.src = "/images/logo.png";
        logoFooter.src = "/images/logo-negro-blck.png";
      } else {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('dark-mode', false);
        logo.src = "/images/logo-blanco.png";
        logoMobile.src = "/images/logo-blanco.png";
        logoFooter.src = "/images/logo-blck.png";
      }
    });
  });
}
