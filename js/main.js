'use strict';

jQuery(function() {
  // メニューボタンをクリックするとメニューが開く
  jQuery(".js-menuBtn").on('click', function() {
    console.log('done');
    jQuery(".js-navMask").show();
    jQuery(".js-menu").addClass("is-open");
    jQuery("body").addClass("is-open");
  });

  // 閉じるボタンをクリックするとメニューが閉じる
  jQuery(".js-closeBtn").on('click', function() {
    jQuery(".js-navMask").hide();
    jQuery(".js-menu").removeClass("is-open");
    jQuery("body").removeClass("is-open");
  });

  // ウィンドウ幅を変更するとメニューを閉じる
  jQuery(window).on('resize', function() {
    jQuery(".js-navMask").hide();
    jQuery(".js-menu").removeClass("is-open");
    jQuery("body").removeClass("is-open");
  });
});