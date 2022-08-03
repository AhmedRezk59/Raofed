$(document).ready(function () {
  sal({
    once: true,
  });
  new bootstrap.ScrollSpy(document.body, {
    target: "#fixedNavbar",
  });
  var swiper = new Swiper(".main-slider", {
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      delay: 10000,
      disableOnInteraction: true,
    },
  });

  var swiper = new Swiper(".clients-slider .mySwiper", {
    navigation: {
      nextEl: ".clients-slider .swiper-button-next",
      prevEl: ".clients-slider .swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      992: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 3,
        grid: {
          rows: 3,
        },
      },
    },
  });
  var swiper = new Swiper(".works-slider .mySwiper", {
    navigation: {
      nextEl: ".works-slider .swiper-button-next",
      prevEl: ".works-slider .swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      992: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 3,
        grid: {
          rows: 3,
        },
      },
    },
  });
  var swiper = new Swiper(".jobs-slider .mySwiper", {
    navigation: {
      nextEl: ".jobs-slider .swiper-button-next",
      prevEl: ".jobs-slider .swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      992: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 2,
        grid: {
          rows: 2,
        },
      },
    },
  });
  $("#fixedNavbar ul li a[href^='#']").on("click", function (e) {
    e.preventDefault();
    var hash = this.hash;
    $("html, body").animate(
      {
        scrollTop: $(this.hash).offset().top,
      },
      500,
      function () {
        window.location.hash = hash;
      }
    );
    if ($(window).width() <= 767) {
      $(".menu-icon").removeClass("active");
      $(".navbar").slideUp(300);
      $("body").removeClass("overflow");
    }
  });

  var prevScroll = $(window).scrollTop();

  $(this).scrollTop() >= 250
    ? $("header").addClass("header-scroll")
    : $("header").removeClass("header-scroll");
  $(window).scroll(function () {
    $(this).scrollTop() >= 250
      ? $("header").addClass("header-scroll")
      : $("header").removeClass("header-scroll");
  });

  $(".menu-icon").on("click", function (e) {
    $(this).toggleClass("active");
    $(".navbar").slideToggle(300);
    $("body").toggleClass("overflow");
  });
});
