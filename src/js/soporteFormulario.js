const slidePage = document.querySelector('#soporte-form');
const firstNextBtn = document.querySelector('#btn-siguiente-1');
const secondNextBtn = document.querySelector('#btn-siguiente-2');
const firstPrevBtn = document.querySelector('#btn-anterior-1');
const secondPrevBtn = document.querySelector('#btn-anterior-2');
const progressName = document.querySelectorAll('.soporte-progreso__nombre');
const progressCheck = document.querySelectorAll('.soporte-progreso__check');
const progressBullet = document.querySelectorAll('.soporte-progreso__bullet');
let max = 3;
let current = 1;

firstNextBtn.addEventListener('click', function() {
    slidePage.style.transform = 'translateX(-100%)';
    progressName[current - 1].classList.add("soporte-progreso__nombre--active");
    progressBullet[current - 1].classList.add("soporte-progreso__bullet--active");
    current += 1;
});
secondNextBtn.addEventListener('click', function() {
    slidePage.style.transform = 'translateX(-200%)';
    progressName[current - 1].classList.add("soporte-progreso__nombre--active");
    progressBullet[current - 1].classList.add("soporte-progreso__bullet--active");
    current += 1;
});
firstPrevBtn.addEventListener('click', function() {
    slidePage.style.transform = 'translateX(0%)';
    progressName[current - 2].classList.remove("soporte-progreso__nombre--active");
    progressBullet[current - 2].classList.remove("soporte-progreso__bullet--active");
    current -= 1;
});
secondPrevBtn.addEventListener('click', function() {
    slidePage.style.transform = 'translateX(-100%)';
    progressName[current - 2].classList.remove("soporte-progreso__nombre--active");
    progressBullet[current - 2].classList.remove("soporte-progreso__bullet--active");
    current -= 1;
});