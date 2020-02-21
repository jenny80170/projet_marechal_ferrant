$(function(){
  // $('#buttonToggle').hide
  // $('#buttonToggle').show
  $('#buttonToggle').click(function(){
    $('#contenu').toggle('slide');
    $('#menuMobil').toggle('slide');
    $('#navbarColor01').css('background-image', 'linear-gradient(chocolate, Silver, tan)');
  });
});
