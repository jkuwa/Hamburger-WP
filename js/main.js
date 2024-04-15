'use strict';

jQuery(function() {
  jQuery(".js-menuBtn").on('click', function() {
    console.log('done');
    jQuery(".js-navMask").show();
    jQuery(".js-menu").addClass("is-open");
    jQuery("body").addClass("is-open");
  });

  jQuery(".js-closeBtn").on('click', function() {
    jQuery(".js-navMask").hide();
    jQuery(".js-menu").removeClass("is-open");
    jQuery("body").removeClass("is-open");
  });

  jQuery(window).on('resize',function() {
    const bp = 1200;
    const width = jQuery(this).width();

    jQuery(".js-navMask").hide();
    jQuery(".js-menu").removeClass("is-open");
    jQuery("body").removeClass("is-open");
  });
});