jQuery(document).ready(function($){
  //lightbox
  var $overlay = $('<div id="overlay"></div>');
  var $container = $('<div class="lightbox"><a href="javascript:void(0)" class="close">&times;</a></div>');
  var $image = $('<img>');
  var $caption = $('<p></p>');

  //add container to overlay
  $overlay.append($container);

  //add image to overlay
  $container.append($image);

  //add caption to overlay
  $overlay.append($caption);

  //add overlay
  $('body').append($overlay);

  //capture click event
  $('.lightbox-link').click(function(){
    event.preventDefault();
    var imageLocation = $(this).attr('href');
    $image.attr("src", imageLocation);
    $image.addClass("lightbox-image");
    $overlay.show();
    var $captionText = $(this).children("img").attr("alt");
    $caption.text($captionText);
  });

  $overlay.click(function(){
    $overlay.hide();
  });
});
