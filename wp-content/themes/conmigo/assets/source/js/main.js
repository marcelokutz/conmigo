$(document).ready(function(){

    var docW = $(document).width();

    
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          //console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();

    if($('.viaggi-luogo').length) {
        var $viaggi = $('.viaggi-luogo strong').text();
        $('.your-viaggio input').val($viaggi);
    }
    if($('.viaggi-date').length) {
        var $viaggi = $('.viaggi-date strong').text();
        $('.viaggio-data input').val($viaggi);
    }

    $('.row-privacy input').length && $('.row-privacy input').checkator();

    

});

