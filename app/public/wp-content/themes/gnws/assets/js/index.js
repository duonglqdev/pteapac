(function ($) {
  window.onload = function () {
    $(document).ready(function () {
      menuMobile();
      backToTop();
      customNavFlkt();
      placeHover();
    });
  };
})(jQuery);
new WOW().init();
function menuMobile() {
  const elements = [
    ".bar__mb",
    ".header__menu",
    ".overlay",
    ".header__menu-close",
  ];
  if (elements.some((el) => $(el).length)) {
    $(".bar__mb, .overlay, .header__menu-close").click(function () {
      $(".overlay, .header__menu").toggleClass(
        "overlay-active header__menu-active"
      );
    });
  }

  $(".header__menu ul li.menu-item-has-children>ul").before(
    `<span class="li-plus"></span>`
  );
  $(
    ".header__menu ul li.current-menu-parent.menu-item-has-children .li-plus"
  ).addClass("clicked");

  if ($(".li-plus").length) {
    $(".li-plus").click(function (e) {
      $(this).toggleClass("clicked");
      $(this).next(".sub-menu").slideToggle();
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

function duplicateSlides(cellSelector) {
  var $slides = $(cellSelector).clone();
  $slides.addClass("show-if-flickity-enabled");
  $(cellSelector).last().after($slides);
}
duplicateSlides(".home__about-slider .item");

function customNavFlkt() {
  var $carousel = $(".home__slider-wrapper").flickity({
    prevNextButtons: false,
    pageDots: false,
    cellAlign: "left",
    wrapAround: true,
    autoPlay: 3000,
  });

  $(".btn-prev").on("click", function () {
    $carousel.flickity("previous");
  });

  $(".btn-next").on("click", function () {
    $carousel.flickity("next");
  });
}

function placeHover() {
  $(document).on("mouseover", ".place__item", function () {
    $(this).find(".read-more").show(300);
  });
  $(document).on("mouseleave", ".place__item", function () {
    $(this).find(".read-more").hide(300);
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
