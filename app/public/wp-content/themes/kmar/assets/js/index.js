(function ($) {
  window.onload = function () {
    $(document).ready(function () {
      menuMobile();
      backToTop();
      sliderPage();
      dynamicPopup();
      countUpNumber();
      $(".list-cauhoi li").on("click", "h4", function (e) {
        // Kiểm tra xem phần tử được click có class 'active' hay không
        if ($(e.delegateTarget).hasClass("active")) {
          $(e.delegateTarget).removeClass("active");
          $(e.delegateTarget).find(".box-ques").removeClass("active");
        } else {
          // Nếu không, thực hiện logic khác
          $(".list-cauhoi li").removeClass("active");
          $(".list-cauhoi li .box-ques").removeClass("active");
          $(e.delegateTarget).addClass("active");
          $(e.delegateTarget).find(".box-ques").toggleClass("active");
        }
      });
    });
  };
})(jQuery);

function menuMobile() {
  const elements = [".bar__mb", ".menu__mobile"];
  if (elements.some((el) => $(el).length)) {
    $(".bar__mb").click(function () {
      $(this).toggleClass("active").find("svg").toggle("fast");
      $(".menu__mobile").toggleClass("active");
      $(".overlay").toggleClass("active");
      $("html").toggleClass("overflow-hidden");
    });
    $(".overlay").click(function () {
      $(".bar__mb").removeClass("active").find("svg").toggle("fast");
      $(".menu__mobile").removeClass("active");
      $(".overlay").removeClass("active");
      $("html").removeClass("overflow-hidden");
    });
  }
  $(".menu__mobile ul li.menu-item-has-children>ul").before(
    `<span class="li-plus"></span>`
  );

  if ($(".li-plus").length) {
    $(".li-plus").click(function (e) {
      $(this).toggleClass("clicked");
      $(this).next(".sub-menu").slideToggle(200);
      $(this)
        .parent()
        .siblings()
        .find(".li-plus")
        .removeClass("clicked")
        .siblings(".sub-menu")
        .slideUp();
    });
  }
}

function backToTop() {
  var $backToTop = $(".back-to-top");
  $backToTop.hide();

  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 200) {
      $backToTop.fadeIn();
    } else {
      $backToTop.fadeOut();
    }
  });

  $backToTop.on("click", function (e) {
    $("html, body").animate({ scrollTop: 0 }, 50);
  });
}

function setSameHeight() {
  $(".block_sameheight").each(function () {
    var h = 0;

    $(this)
      .find(".sameheight-item")
      .each(function () {
        if ($(this).outerHeight() > h) {
          h = $(this).outerHeight();
        }
      });

    $(this).find(".sameheight-item").css({
      height: h,
    });
  });
}

$(document).ready(function () {
  // Custom
  var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
    var stickyHeight = sticky.outerHeight();
    var stickyTop = stickyWrapper.offset().top;
    if (scrollElement.scrollTop() >= stickyTop) {
      stickyWrapper.height(stickyHeight);
      sticky.addClass("is-sticky");
    } else {
      sticky.removeClass("is-sticky");
      stickyWrapper.height("auto");
    }
  };
  // Find all data-toggle="sticky-onscroll" elements
  $('[data-toggle="sticky-onscroll"]').each(function () {
    var sticky = $(this);
    var stickyWrapper = $("<div>").addClass("sticky-wrapper");
    // insert hidden element to maintain actual top offset on page
    sticky.before(stickyWrapper);
    sticky.addClass("sticky");
    // Scroll & resize events
    $(window).on("scroll.sticky-onscroll resize.sticky-onscroll", function () {
      stickyToggle(sticky, stickyWrapper, $(this));
    });
    // On page load
    stickyToggle(sticky, stickyWrapper, $(window));
  });
});

function checkScreenSize() {
  if (
    window.innerHeight >= 680 &&
    window.innerWidth >= 1400 &&
    window.innerWidth <= 1930
  ) {
    var swiperHome = new Swiper(".my-swiper", {
      direction: "vertical",
      slidesPerView: 1,
      spaceBetween: 60,
      mousewheel: true,
      grabCursor: true,
      loop: false,
      speed: 1000,
    });
  } else {
    var my_swiper = document.querySelector(".my-swiper");
    var swiper_wrapper = document.querySelector(".my-swiper .swiper-wrapper");
    var swiper_slides = document.querySelectorAll(".my-swiper .swiper-slide");
    // my_swiper.classList.remove('my-swiper');
    swiper_wrapper.classList.remove("swiper-wrapper");
    swiper_slides.forEach(function (slide) {
      slide.classList.remove("swiper-slide");
    });
  }
  // console.log('Width : ' + window.innerWidth);
  // console.log('Height : ' + window.innerHeight);

  //
}
// checkScreenSize();
// function reloadOnResize() {
//   location.reload();
// }
// if (window.innerWidth >= 1399) {
//   window.addEventListener("resize", reloadOnResize);
// }

// window.addEventListener("load", checkScreenSize);
// window.addEventListener("resize", checkScreenSize);

// fancybox>
$(document).ready(function () {
  //group bao quát thẻ a mục lục
  $(".nav-project ul").on("click", "a", function (e) {
    $(".nav-project ul li a").removeClass("active");
    $(this).addClass("active");
    e.preventDefault();
    var hash = $(this).attr("href");
    if (hash != "") {
      setTimeout(function () {
        window.location.hash = hash;
        $(document).scrollTop($(hash).offset().top - 220);
      }, 10);
    }
  });
});

function myFunction() {
  /* Lấy nội dung từ ô input */
  var noi_dung_sao_chep = document.getElementById("share-link");

  /* Chọn nội dung có trong ô input */
  noi_dung_sao_chep.select();
  noi_dung_sao_chep.setSelectionRange(0, 99999); /*cho thiết bị điện thoại*/

  /* thực hiện copy nội dung */
  document.execCommand("copy");

  /* thông báo nội dung được copy */
  alert("Link copied");
}

$(document).ready(function () {
  var p_div = $(".bx-ct-pj p");
  p_div.addClass("box-wp");
  $(".bx-ct-pj  img").parent().removeClass("box-wp");
  $(".bx-ct-pj  img").parent().addClass("full-w");
});
function smoothScroll(target) {
  const targetElement = document.querySelector(target);
  if (targetElement) {
    window.scrollTo({
      top: targetElement.offsetTop,
      behavior: "smooth",
    });
  }
}
$(document).ready(function () {
  $("#transcripts").change(function () {
    var i = $(this).prev("label").clone();
    var file = $("#transcripts")[0].files[0].name;
    $(this).prev("label").text(file);
  });
});
$(document).ready(function () {
  $(".ii--menu--bar").click(function () {
    $(".ii--menu--bar").removeClass("active");
    $(this).addClass("active");
    $(".text--ii--menu").removeClass("active");
    var menuNumber = $(this).attr("id").split("-").pop();
    $(".text--ii--menu--" + menuNumber).addClass("active");
  });

  $(".open--box--search").on("click", function () {
    $(this).addClass("active");
    $(".f--box--search").addClass("active");
  });
  $(".close--box--search").on("click", function () {
    $(this).addClass("active");
    $(".f--box--search").removeClass("active");
  });

  let contentY = $(".cus-news--page ").height();
  if ($(window).width() > 630) {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 80) {
        $(".over--right--news").addClass("fixed");
        // $('.tour_bg_empty').addClass('fixed');
        // console.log('contentY ' + contentY)
      } else {
        $(".over--right--news").removeClass("fixed");
        // $('.tour_bg_empty').removeClass('fixed');
      }
      // if (Math.floor($(window).scrollTop() + $(window).height()) > Math.floor($(document).height() - 377)) {
      //     $('.over--right--news').removeClass('fixed');
      // }

      // console.log($(this).scrollTop())
    });
  }
});

function sliderPage() {
  if ($(".swiper__slider").length) {
    var swiper = new Swiper(".swiper__slider", {
      loop: true,
      slidesPerView: 1,
      speed: 1000,
      effect: "fade",
    });
  }
  if ($(".list-teacher--home").length) {
    var swiperStaff = new Swiper(".list-teacher--home", {
      loop: true,
      speed: 500,
      spaceBetween: 20,
      autoplay: 3000,
      breakpoints: {
        992: {
          slidesPerView: 4,
        },
        0: {
          slidesPerView: 2,
        },
      },
    });
  }
  if ($(".list-partner--home").length) {
    var swiperPartner = new Swiper(".list-partner--home", {
      loop: true,
      speed: 500,
      spaceBetween: 20,
      autoplay: 3000,
      breakpoints: {
        992: {
          slidesPerView: 4,
        },
        0: {
          slidesPerView: 2,
        },
      },
    });
  }
  if ($(".list-feel--home").length) {
    var swiperPartner = new Swiper(".list-feel--home", {
      loop: true,
      speed: 500,
      slidesPerView: 2,
      spaceBetween: 20,
      autoplay: 3000,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        992: {
          slidesPerView: 3,
        },
        0: {
          slidesPerView: 2,
        },
      },
    });
  }
  if ($(".list-result--home").length) {
    var swiperRsult = new Swiper(".list-result--home", {
      loop: true,
      speed: 500,
      slidesPerView: 1,
      autoplay: 3000,
     
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  }
}

function dynamicPopup() {
  $(".item-partner--home").click(function () {
    let contentPopUp = $(this).find("[data-popup]").html();
    let partnerModal = $("#partnerModal .modal-body");
    partnerModal.empty();
    partnerModal.append(contentPopUp);
  });
}

function countUpNumber() {
  if ($(".section__count").length) {
    var counted = 0;
    $(window).scroll(function () {
      var oTop = $(".section__count").offset().top - window.innerHeight;
      if (counted == 0 && $(".count").length && $(window).scrollTop() > oTop) {
        $(".count").each(function () {
          var $this = $(this),
            countTo = $this.attr("data-count");
          $({
            countNum: $this.text(),
          }).animate(
            {
              countNum: countTo,
            },

            {
              duration: 2000,
              easing: "swing",
              step: function () {
                $this.text(Math.floor(this.countNum));
              },
              complete: function () {
                $this.text(this.countNum);
              },
            }
          );
        });
        counted = 1;
      }
    });
  }
}