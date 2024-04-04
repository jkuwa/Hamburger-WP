'use strict';

$(function() {
  $(".js-menuBtn").on('click', function() {
    console.log('done');
    $(".js-navMask").show();
    $(".js-menu").addClass("is-open");
    $("body").addClass("is-open");
  });

  $(".js-closeBtn").on('click', function() {
    $(".js-navMask").hide();
    $(".js-menu").removeClass("is-open");
    $("body").removeClass("is-open");
  });

  $(window).on('resize',function() {
    const bp = 1200;
    const width = $(this).width();

    $(".js-navMask").hide();
    $(".js-menu").removeClass("is-open");
    $("body").removeClass("is-open");
  });
});