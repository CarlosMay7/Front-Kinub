document.addEventListener('DOMContentLoaded', function() {
    const headerNav = document.querySelector('#header-nav');

    function navegacionFija() {
        if(window.scrollY >= 90) {
            headerNav.classList.add('header--fixed');
        } else {
            headerNav.classList.remove('header--fixed');
        }
    }

    window.addEventListener('scroll', navegacionFija);
});