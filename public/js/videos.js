// Listen for keyup event on search input
$('.search-input').on('keyup', function() {

    // Get search value
    var searchTerm = $(this).val();
  
    // Get the closest section element.
    var section = $(this).closest(".col-md-12");
    // Find the .video-container within the section and hide all videos first.
    section.find('.carousel-item').removeClass('active');
           
  
    // Filter video titles
    $('.video-title').each(function() {
        var titleVideo=$(this).text().toLowerCase();
     if( (searchTerm.toLowerCase() == "") ||!(searchTerm.toLowerCase().trim())  ){
           var section = $(this).closest(".col-md-12");
           section.find('.carousel-item').removeClass('active');
           section.find('.carousel-item:first').addClass('active');
   
         }
      else if (titleVideo.includes(searchTerm.toLowerCase())) {
        $(this).closest('.carousel-item').addClass('active');
      }
    });
  
  });