jQuery(document).ready(function() {
  btnMaximized = false;

  $('#rhc-menu').on('click', function() {
    //console.log('test ok!');

    if(btnMaximized) {
      $('.rhc-menu').html('<span class="fa fa-bars fa-lg fa-menu white animated rotatein"></span>&nbsp;<strong class="menu">MENU</strong>');
      $('.sidebar').animate({ left: '-330px'}, function(){ $(".sidebar").hide() } );

      if (document.documentElement.clientWidth <= 768 || document.documentElement.clientWidth >= 799){
        $('.sm-donate-button-header').fadeOut({display: 'none'}, 5000);
      } 

      if (document.documentElement.clientWidth <= 800 || document.documentElement.clientWidth >= 1023) {
        $('.sm-donate-button-header').fadeOut({display: 'none'}, 5000);
      } 

      if (document.documentElement.clientWidth >= 1024) {
        $('.sm-donate-button-header').fadeIn({display: 'block'}, 5000);
      }
    }
    else {
      $('.rhc-menu').html('<span class="fa fa-close fa-lg fa-menu white animated rotatein"></span>&nbsp;<strong class="menu">MENU</strong>');
      $('.sidebar').animate({ left: '0px' }).addClass("animated fadein").show();
      $('.sm-donate-button-header').fadeOut({display: 'none'}, 5000);
    }

    btnMaximized =! btnMaximized;
  });
});