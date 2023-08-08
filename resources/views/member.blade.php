<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset('assets/css/members.css')}}">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/main.css">

  <title>قائمتي     </title>

</head>
<body>
  
  <div class="main-wrapper">
    <div class="overlay overlay-bg"></div>
    <div class="container">
      <h1>{{Auth::user()->name}}</h1>
      <section class="parallux-area pt-100 pb-100 relative"     data-parallax="scroll" data-image-src="img/gym01.png">
                      
        <div class="container">
        <div class="row justify-content-end">
        <div class="col-lg-5 col-md-6 col-sm-12">
        <h2>
        Reasons To <br>
        <span>Choose</span> Notebook
        </h2>
        <p>
        Here, I focus on a range of items and features that we use in life without giving them a second thought. such as Coca Cola. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
        </p>
        <a href="#" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
        </div>
        </div>
        </div>
   
    
        </section>
        <div class="section">
          <h2>Paid Bills</h2>
          <ul class="exercise-list">
            <!-- List of paid bills will be dynamically added here -->
            <li>Bill 1</li>
            <li>Bill 2</li>
            <li>Bill 3</li>
          </ul>
        </div>
      <section class="parallux-area pt-100 pb-100 relative"     data-parallax="scroll" data-image-src="img/payment.png">
                      
        <div class="container">
          <h2>Online Payment</h2>
          <p>Please make the payment using the link below:</p>
          <a href="#" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">Make Payment</span><span class="lnr lnr-arrow-right"></span></a>
        </div>
   
    
        </section>
        <div class="section">
          <h2>Paid Bills</h2>
          <ul class="exercise-list">
            <!-- List of paid bills will be dynamically added here -->
            <li>Bill 1</li>
            <li>Bill 2</li>
            <li>Bill 3</li>
          </ul>
        </div>
 
      
        <section class="newsletter-area pt-100 pb-100">
        <div class="container">
          <div class="Exercises">
            <h2>Recorded Exercises</h2>
            <div class="exercise-list-container p-4">
              <ul class="list-group exercise-list">
                <!-- List of recorded exercises will be dynamically added here -->
                <li class="list-group-item d-flex justify-content-between align-items-center mb-2">
                  <div>
                    <span class="exercise-name">Exercise 1</span>
                    <span class="exercise-date">2023-08-08</span>
                  </div>
                  <div>
                    <button class="btn btn-primary edit-btn">Edit</button>
                    <button class="btn btn-danger delete-btn">Delete</button>
                  </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center mb-2">
                  <div>
                    <span class="exercise-name">Exercise 2</span>
                    <span class="exercise-date">2023-08-09</span>
                  </div>
                  <div>
                    <button class="btn btn-primary edit-btn">Edit</button>
                    <button class="btn btn-danger delete-btn">Delete</button>
                  </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center mb-2">
                  <div>
                    <span class="exercise-name">Exercise 3</span>
                    <span class="exercise-date">2023-08-10</span>
                  </div>
                  <div>
                    <button class="btn btn-primary edit-btn">Edit</button>
                    <button class="btn btn-danger delete-btn">Delete</button>
                  </div>
                </li>
              </ul>
            </div>
            <form class="exercise-form exercise-list-container p-4">
              <div class="input-group mb-3">
                <input type="text" class="form-control form-control-sm rounded-left" placeholder="Exercise name">
                <div class="input-group-append">
                  <button class="btn btn-success btn-sm rounded-right" type="submit">Add Exercise</button>
                </div>
              </div>
            </form>
          </div>
        </div>
    
    
        </section>
        
        <section class="color-change relative">
          <div class="container">
              <a id="change-color-btn" class="primary-btn d-inline-flex align-items-center mt-10 mb-10" style="
              color: #fff;
          ">
                  <span class="mr-10">Change Color</span><span class="lnr lnr-arrow-right"></span>
              </a>
          <!--  -->

          </div>
        </section>
      </div>
    </div>
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script></html>
</body>
</html>