!(function (s) {
  "use strict";
  s(".switch").on("click", function () {
    s("body").hasClass("light")
      ? (s("body").removeClass("light"), s(".switch").removeClass("switched"))
      : (s("body").addClass("light"), s(".switch").addClass("switched"));
  });

  s(document).ready(function () {
    // Progress circle logic
    var e = document.querySelector(".progress-wrap path"),
        t = e.getTotalLength();

    e.style.transition = e.style.WebkitTransition = "none";
    e.style.strokeDasharray = t + " " + t;
    e.style.strokeDashoffset = t;
    e.getBoundingClientRect();
    e.style.transition = e.style.WebkitTransition = "stroke-dashoffset 10ms linear";

    var updateProgress = function () {
      var scrollTop = s(window).scrollTop(),
          docHeight = s(document).height() - s(window).height(),
          progress = t - (scrollTop * t) / docHeight;
      e.style.strokeDashoffset = progress;
    };

    updateProgress();
    s(window).scroll(updateProgress);

    // Show buttons on scroll
    jQuery(window).on("scroll", function () {
      if (jQuery(this).scrollTop() > 50) {
        jQuery(".progress-wrap").addClass("active-progress");
        jQuery(".progress-wrap-wp").addClass("active-progress");
      } else {
        jQuery(".progress-wrap").removeClass("active-progress");
        jQuery(".progress-wrap-wp").removeClass("active-progress");
      }
    });

    // Scroll to top ONLY when clicking the progress-wrap
    jQuery(".progress-wrap").on("click", function (s) {
      s.preventDefault();
      jQuery("html, body").animate({ scrollTop: 0 }, 550);
      return false;
    });

    // WhatsApp Button - NO scroll behavior
    jQuery(".progress-wrap-wp").on("click", function (s) {
      // Optional: Uncomment to open WhatsApp
      window.open("https://api.whatsapp.com/send/?phone=919353012221&text=Hello%20there%2C%20I%20want%20to%20talk%20to%20you.&app_absent=0", "_blank");
      
      // Just prevent default if it's an anchor (optional)
      s.preventDefault();
    });
  });
})(jQuery);
