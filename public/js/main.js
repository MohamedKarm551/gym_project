
$(document).ready(function(){
	"use strict";

	var window_width 	 = $(window).width(),
	window_height 		 = window.innerHeight,
	header_height 		 = $(".default-header").height(),
	header_height_static = $(".site-header.static").outerHeight(),
	fitscreen 			 = window_height - header_height;


	$(".fullscreen").css("height", window_height)
	$(".fitscreen").css("height", fitscreen);

     
     // -------   Active Mobile Menu-----//

    $(".menu-bar").on('click', function(e){
        e.preventDefault();
        $("nav").toggleClass('hide');
        $("span", this).toggleClass("lnr-menu lnr-cross");
        $(".main-menu").addClass('mobile-menu');
    });
     
    $('select').niceSelect();
    $('.img-pop-up').magnificPopup({
        type: 'image',
        gallery:{
        enabled:true
        }
    });

    $('.active-feature-carousel').owlCarousel({
        items:1,
        loop:true,
        center:true
    });



    // Add smooth scrolling to Menu links
    $('.play-btn').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    $(document).ready(function() {
        $('#mc_embed_signup').find('form').ajaxChimp();
    });    


    
        var form = $('#myForm'); // contact form
        var submit = $('.submit-btn'); // submit button
        var alert = $('.alert-msg'); // alert div for show alert message

        // form submit event
        form.on('submit', function(e) {
            e.preventDefault(); // prevent default form submit

            $.ajax({
                url: 'mail.php', // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                data: form.serialize(), // serialize form data
                beforeSend: function() {
                    alert.fadeOut();
                    submit.html('Sending....'); // change submit button text
                },
                success: function(data) {
                    alert.html(data).fadeIn(); // fade in response data
                    form.trigger('reset'); // reset form
                    submit.attr("style", "display: none !important");; // reset submit button text
                },
                error: function(e) {
                    console.log(e)
                }
            });
        });  

 });
//  $(document).ready(function() {
//     var colors = ['#FFC300', '#FF5733', '#C70039', '#900C3F', '#581845'];
  
//     $('#change-color-btn').click(function() {
//       var randomIndex = Math.floor(Math.random() * colors.length);
//       var randomColor = colors[randomIndex];
//       $('.p1-gradient-bg, .primary-btn:after, .overlay-bg, .owl-dot.active, .service-area .single-service .overlay-content').css('background-image', '-webkit-linear-gradient(0deg, ' + randomColor + ' 0%, ' + randomColor + ' 100%)');
//     });
//   });
$(document).ready(function() {
    var cssChange= $(
        '.p1-gradient-bg, .primary-btn:after, .overlay-bg, .owl-dot.active, .service-area .single-service .overlay-content'
      );
    var arrayColors = [
        '-webkit-linear-gradient(0deg, #3224b0 0%, #be5ede 100%)',
        '-webkit-linear-gradient(0deg, #FFC300 0%, #FF5733 100%)',
        '-webkit-linear-gradient(0deg, #2C3E50 0%, #8E44AD 100%)',
        '-webkit-linear-gradient(0deg, #ffd89b 0%, #19547b 100%)',
        '-webkit-linear-gradient(0deg, #00b09b 0%, #96c93d 100%)',
        '-webkit-linear-gradient(0deg, #fffbd5 0%, #b20a2c 100%)',
        '-webkit-linear-gradient(0deg, #FC466B 0%, #3F5EFB 100%)',
    ] ;
    
    // var currentIndex = 0; // Initialize current index
    if(localStorage.getItem('currentIndex')){
       var currentIndex =parseInt(localStorage.getItem('currentIndex'));}
       cssChange.css('background-image', arrayColors[currentIndex-1 ]);
    //   ============= on click ==============
    $('#change-color-btn').click(function() {
        if(localStorage.getItem('currentIndex')){
           currentIndex =parseInt(localStorage.getItem('currentIndex'));
           console.log(currentIndex);
                            }
                            else{
                                var currentIndex = 0; // Initialize current index
                            }
      $(
        '.p1-gradient-bg, .primary-btn:after, .overlay-bg, .owl-dot.active, .service-area .single-service .overlay-content'
      ).css('background-image', arrayColors[currentIndex]);
      document.getElementById("change-color-btn").textContent = "Change Color (" + currentIndex  + ")";
      currentIndex++; // Increment current index
      if (currentIndex >= arrayColors.length) {
        currentIndex = 0; // Reset current index if it exceeds the array length
      }
      localStorage.setItem('currentIndex', currentIndex);//save the item in local 
    //   console.log(currentIndex);
   
      
    });
  });
//   when i click on .add_exercise  that show modal .add_exercise_modal
  $(document).ready(function() {
    $('.editExercise').click(function() {
        // Code to show the modal here
       $('.edit_exercise_modal').show();
        // console.log("test");
    });
    document.addEventListener('click', function(event) {
        if (event.target.matches('[data-dismiss="modal"]')) {
          var modal = event.target.closest('.modal');
          if (modal) {
            modal.style.display = 'none';
          }
        }
      });
  });
  // change the images in nav  
    // Array of image objects with filename and width
    var images = [
      { filename: "img/nav01.png", width: "50px" },
      { filename: "img/nav02.png", width: "50px" },
      { filename: "img/nav03.png", width: "80px" },
      { filename: "img/nav04.png", width: "90px" },
      { filename: "img/nav05.png", width: "80px" },
      { filename: "img/nav06.png", width: "80px" },
      { filename: "img/nav07.png", width: "80px" }
  ];
  var currentIndex = 0; // Variable to keep track of the current image index

  // Function to change the image
  function changeImage() {
    var imgElements = document.querySelectorAll("#dynamic-image");
    
    // Change the src and width attributes of all dynamic-image elements
    imgElements.forEach(function(img) {
      img.src = images[currentIndex].filename; // Set the image source based on the current image index
      img.style.width = images[currentIndex].width; // Set the width of the image based on the current image index
      currentIndex++; // Increment the current image index
      if (currentIndex >= images.length) {
        currentIndex = 0; // Reset the index to loop back to the first image
      }
    }); // <-- Add this closing parenthesis
  }
  
  // Change the image when the page is loaded
  changeImage();
  
  // Change the image every 30 seconds
  setInterval(changeImage, 30000); // 30000 milliseconds = 30 seconds
  