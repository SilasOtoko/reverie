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
  $('.lightbox-link').click(function(event){
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

  //re-enable map zoom on click
  $('.maps').click(function () {
    $('.maps iframe').css("pointer-events", "auto");
  });

  //accordion
  var acc = document.getElementsByClassName("sidebar-toggle");
  var i;

  for (i = 0; i < acc.length; i++) {
      acc[i].onclick = function(){
          this.classList.toggle("active");
          this.nextElementSibling.classList.toggle("show");
      }
  }
});
