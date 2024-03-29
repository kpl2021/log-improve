/*!

 =========================================================
 * Light Bootstrap Dashboard - v1.4.0
 =========================================================

 * Product Page: http://www.creative-tim.com/product/light-bootstrap-dashboard
 * Copyright 2017 Creative Tim (http://www.creative-tim.com)
 * Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE.md)

 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

 */

var searchVisible = 0;
var transparent = true;

var transparentDemo = true;
var fixedTop = false;

var navbarInitialized = false;

$(document).ready(function () {
  windowWidth = $(window).width();

  // check if there is an image set for the sidebar's background
  lbd.checkSidebarImage();

  // Init navigation toggle for small screens
  lbd.initRightMenu();

  //  Activate the tooltips
  $('[rel="tooltip"]').tooltip();

  $(".form-control")
    .on("focus", function () {
      $(this).parent(".input-group").addClass("input-group-focus");
    })
    .on("blur", function () {
      $(this).parent(".input-group").removeClass("input-group-focus");
    });

  // Fixes sub-nav not working as expected on IOS
  $("body").on("touchstart.dropdown", ".dropdown-menu", function (e) {
    e.stopPropagation();
  });
});

$(document).on("click", ".navbar-toggle", function () {
  $toggle = $(this);

  if (lbd.misc.navbarMenuVisible === 1) {
    $("html").removeClass("nav-open");
    lbd.misc.navbarMenuVisible = 0;
    $("#bodyClick").remove();
    setTimeout(function () {
      $toggle.removeClass("toggled");
    }, 550);
  } else {
    setTimeout(function () {
      $toggle.addClass("toggled");
    }, 580);
    div = '<div id="bodyClick"></div>';
    $(div)
      .appendTo("body")
      .click(function () {
        $("html").removeClass("nav-open");
        lbd.misc.navbarMenuVisible = 0;
        setTimeout(function () {
          $toggle.removeClass("toggled");
          $("#bodyClick").remove();
        }, 550);
      });

    $("html").addClass("nav-open");
    lbd.misc.navbarMenuVisible = 1;
  }
});

$(window).on("resize", function () {
  if (navbarInitialized) {
    lbd.initRightMenu();
    navbarInitialized = true;
  }
});

lbd = {
  misc: {
    navbarMenuVisible: 0,
  },

  checkSidebarImage() {
    $sidebar = $(".sidebar");
    imageSrc = $sidebar.data("image");

    if (imageSrc !== undefined) {
      sidebarContainer =
        '<div class="sidebar-background" style="background-image: url(' +
        imageSrc +
        ') "/>';
      $sidebar.append(sidebarContainer);
    }
  },

  initRightMenu: debounce(function () {
    if (!navbarInitialized) {
      $sidebarWrapper = $(".sidebar-wrapper");
      $navbar = $("nav").find(".navbar-collapse").html();

      mobile_menu_content = "";

      navContent = $navbar;

      navContent = '<ul class="nav nav-mobile-menu">' + navContent + "</ul>";

      // navbar_form = $('nav').find('.navbar-form').get(0).outerHTML;

      $sidebar_nav = $sidebarWrapper.find(" > .nav");

      // insert the navbar form before the sidebar list
      $navContent = $(navContent);
      // $navbar_form = $(navbar_form);
      $navContent.insertBefore($sidebar_nav);
      // $navbar_form.insertBefore($navContent);

      $(".sidebar-wrapper .dropdown .dropdown-menu > li > a").click(function (
        event
      ) {
        event.stopPropagation();
      });

      mobileMenuInitialized = true;
    } else {
      if ($(window).width() > 991) {
        // reset all the additions that we made for the sidebar wrapper only if the screen is bigger than 991px
        // $sidebarWrapper.find('.navbar-form').remove();
        $sidebarWrapper.find(".nav-mobile-menu").remove();

        mobileMenuInitialized = false;
      }
    }
  }, 200),
};

// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.

function debounce(func, wait, immediate) {
  var timeout;
  return function () {
    var context = this,
      args = arguments;
    clearTimeout(timeout);
    timeout = setTimeout(function () {
      timeout = null;
      if (!immediate) {
        func.apply(context, args);
      }
    }, wait);
    if (immediate && !timeout) {
      func.apply(context, args);
    }
  };
}
