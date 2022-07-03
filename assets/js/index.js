/*=============== NAVBAR ===============*/
$(function () {
    $('.btn-hamburguesa').on('click', function () {
        if ($('.item').hasClass('active')) {
            $('.item').removeClass('active');
        } else {
            $('.item').addClass('active');
        }
    });
});


/*=============== BOTON RESPONSIVE ===============*/
const hamburgerMenu = document.querySelector('.hamburger');
const menuIsActive = () => {
    hamburgerMenu.classList.toggle('active');
};
hamburgerMenu.addEventListener('click', menuIsActive);


/*=============== HOME SLIDER ===============*/
let homeSwiper = new Swiper('.home-swiper', {
    spaceBetween: 30,
    loop: 'true',

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
})


/*=============== SLIDER NUEVOS PRODUCTOS ===============*/
let newSwiper = new Swiper('.new-swiper', {
    centeredSlides: true,
    slidesPerView: 'auto',
    loop: 'true',
    spaceBetween: 16,
});


/*=============== SCROLL PARA ARRIBA ===============*/
function scrollUp() {
    const scrollUp = document.getElementById('scroll-up');
    if (this.scrollY >= 460) scrollUp.classList.add('show-scroll');
    else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)


/*=============== SCROLL REVEAL ANIMATION ===============*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400,
    // reset: true
})

sr.reveal(`.home-swiper, .new-swiper, .newsletter__container`)
sr.reveal(`.category__data, .trick__content, .footer__content`, {
    interval: 100
})
sr.reveal(`.about__data, .discount__img`, {
    origin: 'left'
})
sr.reveal(`.about__img, .discount__data`, {
    origin: 'right'
})


/*=============== BOTON LANG ===============*/
let btnEs = document.getElementById('btnEs');
let btnPt = document.getElementById('btnPt');
let btnEn = document.getElementById('btnEn');

let selector = document.getElementById('selector');

$(document).ready(function() {
    $('li').on('click', function() {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
    })
});

/* Escucha para el boton en español */
btnEs.addEventListener('click', () => {
    if (!btnEs.classList.contains('active')) {
        localStorage.setItem('lang', 'es');

    }
    updateIdioma();
});

/* Escucha para el boton en portugues */
btnPt.addEventListener('click', () => {
    if (!btnPt.classList.contains('active')) {
        localStorage.setItem('lang', 'pt');
    }
    updateIdioma();
});

/* Escucha para el boton en ingles */
btnEn.addEventListener('click', () => {
    if (!btnEn.classList.contains('active')) {
        localStorage.setItem('lang', 'en');
    }
    updateIdioma();
});

function getIdioma() {
    /* Si existe la key 'lang' */
    if (localStorage.getItem('lang') !== null) {
        if (localStorage.getItem('lang') === 'es') {
            btnEs.classList.add('active');
            btnPt.classList.remove('active');
            btnEn.classList.remove('active');
        } else if (localStorage.getItem('lang') === 'pt') {
            btnPt.classList.add('active');
            btnEn.classList.remove('active');
            btnEs.classList.remove('active');
        } else if (localStorage.getItem('lang') === 'en') {
            btnEn.classList.add('active');
            btnPt.classList.remove('active');
            btnEs.classList.remove('active');
        }
    } else {
        localStorage.setItem('lang', 'es');
        btnEs.classList.add('active');
        window.location.href = '?lang=es';
    }
    updateIdioma();
}

getIdioma();

function updateIdioma() {
    if (localStorage.getItem('lang') === 'es') {
        btnEs.classList.add('active');
        btnPt.classList.remove('active');
        btnEn.classList.remove('active');
    } else if (localStorage.getItem('lang') === 'pt') {
        btnPt.classList.add('active');
        btnEn.classList.remove('active');
        btnEs.classList.remove('active');
    } else if (localStorage.getItem('lang') === 'en') {
        btnEn.classList.add('active');
        btnPt.classList.remove('active');
        btnEs.classList.remove('active');
    }
}