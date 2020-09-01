const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const header = document.querySelector('.header.first-container');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('hamburger_active');
    mobile_menu.classList.toggle('hamburger_active');
});

document.addEventListener('scroll', () => {
    var scroll_position = window.scrollY;
    if (scroll_position > 250) {
        header.style.backgroundColor = "#29323c";
    } else {
        header.style.backgroundColor = "transparent";
    }
});


var backTop = {
    init: function(){
        $(doc).ready(function(){

            // Show or Hide The Sticky Footer Button

            $(window).scroll(function(){
                if ($(this).scrollTop() > 200 ) {

                    $('#back_to_top').fadeIn(200);
                } else {
                    $('#back_to_top').fadeOut(200);
                }
            });


            // Animate the scroll to top

            $('#back_to_top').click(function(e){

                e.preventDefault();
                window.scrollTo({top: 0, behavior: 'smooth'});
            });

        });
    }
};
