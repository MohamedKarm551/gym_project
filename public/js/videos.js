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
  //  get the title from youtube video and write it in html with API  23-8-2023
        // Select all iframes with the class "youtube-iframe"
        var iframes = document.querySelectorAll('iframe');

        // Loop through each iframe and fetch the corresponding video title
        iframes.forEach(function(iframe) {
          var videoUrl = iframe.getAttribute('src');
          var videoId = videoUrl.match(/embed\/([^?]+)/)[1];
          var apiUrl = 'https://www.youtube.com/oembed?url=https://www.youtube.com/watch?v=' + videoId + '&format=json';
    
          // Find the corresponding title element within the same container
          var titleElement = iframe.closest('.video-container').querySelector('.video-title');
    
          // Make the API request
          fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
              var videoTitle = data.title;
              titleElement.textContent = videoTitle;
            })
            .catch(error => console.error('Error fetching video title:', error));
        });