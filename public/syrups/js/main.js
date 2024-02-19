(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-150px');
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Modal Video
    var $videoSrc;
    $('.btn-play').click(function () {
        $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);
    $('#videoModal').on('shown.bs.modal', function (e) {
        $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    })
    $('#videoModal').on('hide.bs.modal', function (e) {
        $("#video").attr('src', $videoSrc);
    })


    // Product carousel
    $(".product-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        loop: true,
        center: true,
        dots: false,
        nav: true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ],
        responsive: {
			0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });


    // Testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        loop: true,
        dots: true,
        nav: false,
    });

    // let sections = document.querySelectorAll('section');
    // let navLinks = document.querySelectorAll('div nav a');
    
    // window.onscroll = () => {
    //     sections.forEach(sec => {
    //         let top = window.scrollY;
    //         let offset = sec.offsetTop;
    //         let height = sec.offsetHeight;
    //         let id = sec.getAttribute('id');
    
    //         if(top >= offset && top < offset + height){
    //             navLinks.forEach(link => {
    //                 link.classList.remove('active');
    //             });
    //             document.querySelector('div nav a[href="#' + id + '"]').classList.add('active');
    //         }
    //     });
    // };

    let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('div nav a');

// Function to remove 'active' class from all nav links
const removeActiveClasses = () => {
    navLinks.forEach(link => {
        link.classList.remove('active');
    });
};

// Scroll Event Listener
window.onscroll = () => {
    let currentSection = '';

    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        if (pageYOffset >= sectionTop - sectionHeight / 3) {
            currentSection = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').includes(currentSection)) {
            link.classList.add('active');
        }
    });
};

// Click Event Listener for each nav link
navLinks.forEach(link => {
    link.addEventListener('click', function() {
        removeActiveClasses();
        this.classList.add('active');
    });
});

    
    
})(jQuery);

