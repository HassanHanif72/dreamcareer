// testimonial slider

$(".testi-slider").slick({
  dots: true,
  arrows: false,
  autoplay: true,
  centerMode: true,
  centerPadding: '0px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: false,
      },
    },
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        dots: false,
        autoplay: true,
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        dots: false,
        autoplay: true,
        slidesToShow: 1,
      },
    },
  ],
});


// Get Quote Form validation

(function () {
  'use strict';
  var forms = document.querySelectorAll('.needs-validation');
  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }

      form.classList.add('was-validated');
    }, false);
  });
})();


$(document).ready(function () {
  $('.navdesktop').hover(
    function () {
      $(this).addClass('show');
      $(this).find('.dropdown-navdesktop').first().addClass('show');
    },
    function () {
      $(this).removeClass('show');
      $(this).find('.dropdown-navdesktop').first().removeClass('show');
    }
  );
});

// Sticky header

window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
})

// end Sticky header



