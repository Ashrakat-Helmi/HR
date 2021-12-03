let btnIcon = document.getElementById('btnIcon');
let overLay = document.querySelector('.overlay');
let cloceIcon = document.querySelector('.top-nav-container .close-icon');
let overLayMenu = document.querySelector('.overlay-menu ');
let nav = document.querySelector('nav');
let navUL = document.querySelectorAll(".overlay-menu ul li a");

// navFn =بتظهر ال ناف ف الرسبونسف
let navFun = () => {
    overLay.classList.remove("none");
    cloceIcon.classList.remove("none");
    overLayMenu.classList.remove("none");

}
btnIcon.addEventListener('click', navFun);
//  end navFun=================================================

// closeFun = بتقفل الناف ف الرسبونسف
let closeFun = () => {
    overLay.classList.add("none");
    cloceIcon.classList.add("none");
    overLayMenu.classList.add("none");

}
cloceIcon.addEventListener("click", closeFun);
// end closeFun =========================================================

//  closeNav =بتخفي الناف ف الرسبونسف بعد م اختار 
let addActive = () => {
    closeFun()

}

navUL[0].addEventListener('click', addActive);
navUL[1].addEventListener('click', addActive);
navUL[2].addEventListener('click', addActive);
navUL[3].addEventListener('click', addActive);
navUL[4].addEventListener('click', addActive);
navUL[5].addEventListener('click', addActive);
navUL[6].addEventListener('click', addActive);
navUL[7].addEventListener('click', addActive);
