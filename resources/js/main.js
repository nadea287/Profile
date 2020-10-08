//hide after pseudo element
$(".display-user-name").addClass('no-after');

const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const header = document.querySelector('.header.first-container');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('hamburger_active');
    mobile_menu.classList.toggle('hamburger_active');
});

document.addEventListener('scroll', () => {
    var scroll_position = window.scrollY;
    if (scroll_position > 50) {
        header.style.backgroundColor = "#29323c";
    } else {
        header.style.backgroundColor = "transparent";
    }
});


//AOS
AOS.init({
    delay: 200,
});


//arrow up
const toTop = document.querySelector(".arrow-up-wrapper-section");

window.addEventListener("scroll", () => {
   if (window.pageYOffset > 100) {
       //if page was scrolled 100 px
       toTop.classList.add("active_back_to_top");
   } else {
       toTop.classList.remove("active_back_to_top");
   }

});

toTop.addEventListener("click", () => {
    window.scrollTo({top: 0, behavior: 'smooth'});
});
