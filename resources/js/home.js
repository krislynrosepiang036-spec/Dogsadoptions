

AOS.init({
    duration: 1000,
    once: true
});
window.addEventListener('scroll', function () {
    const nav = document.querySelector('.navbar');
    if (window.scrollY > 50) nav.classList.add('py-2', 'shadow-sm');
    else nav.classList.remove('py-2', 'shadow-sm');
});