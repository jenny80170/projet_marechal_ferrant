$(function(){
  $('#buttonToggle').click(function(){
    $('.contenu').toggle('slide');
    $('.navPhone').css('background-image', 'linear-gradient(chocolate, Silver, tan)');
    if($('#hidePhone').css('opacity') === '1'){
      $('#hidePhone').css('opacity', '0');
    }

    else if($('#hidePhone').css('opacity') === '0'){
      $('#hidePhone').css('opacity', '1');
    }
  });

  $('.notice').on('click', function(){
    $('#modalNotice').modal('show');
  });
  $('.siret').on('click', function(){
    $('#modalSiret').modal('show');
  });
});
