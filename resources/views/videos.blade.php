<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/videos.css') }}">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    {{-- <link rel="stylesheet" href="css/font-awesome.min.css"> --}}
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <title>Videos</title>
</head>

<body>
    <div class="container">
        <h1>Gym Videos</h1>
        <div class="cardio-videos">
            <div class="col-md-12">
                <h2>Cardio Exercises</h2>
                <div class="form-group">
                    <input type="text" class="form-control search-input" data-target=".cardio-videos"
                        placeholder="Search videos by title">
                </div>
                <div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="video-container">
                                <h3 class="video-title">Video 1</h3>
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/6cmyFw-Wrrk?si=3pCOSTERKnr7xw1g" frameborder="0"
                                    allowfullscreen title="video1 test01"></iframe>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="video-container">
                                <h3 class="video-title">Video 2</h3>
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/6cmyFw-Wrrk?si=3pCOSTERKnr7xw1g" frameborder="0"
                                    allowfullscreen title=""></iframe>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="video-container">
                                <h3 class="video-title">Video 3</h3>
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/6cmyFw-Wrrk?si=3pCOSTERKnr7xw1g" frameborder="0"
                                    allowfullscreen title=""></iframe>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="video-container">
                                <h3 class="video-title">Video 4</h3>
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/6cmyFw-Wrrk?si=3pCOSTERKnr7xw1g" frameborder="0"
                                    allowfullscreen title=""></iframe>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="" aria-hidden=""></span>
                        <span class="">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span aria-hidden=""></span>
                        <span>Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="strength-videos">
            <div class="col-md-12">
                <h2>Strength Exercises</h2>
                <div class="form-group">
                    <input type="text" class="form-control search-input" data-target=".strength-videos"
                        placeholder="Search videos by title">
                </div>
                <div class="carousel slide" id="carouselExampleIndicators2" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="video-container">
                                <h3 class="video-title">Video 1</h3>
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/6cmyFw-Wrrk?si=3pCOSTERKnr7xw1g"
                                    frameborder="0" allowfullscreen title="video1 test01"></iframe>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="video-container">
                                <h3 class="video-title">Video 2</h3>
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/6cmyFw-Wrrk?si=3pCOSTERKnr7xw1g"
                                    frameborder="0" allowfullscreen title=""></iframe>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="video-container">
                                <h3 class="video-title">Video 3</h3>
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/6cmyFw-Wrrk?si=3pCOSTERKnr7xw1g"
                                    frameborder="0" allowfullscreen title=""></iframe>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="video-container">
                                <h3 class="video-title">Video 4</h3>
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/6cmyFw-Wrrk?si=3pCOSTERKnr7xw1g"
                                    frameborder="0" allowfullscreen title=""></iframe>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button"
                        data-slide="prev">
                        <span class="" aria-hidden=""></span>
                        <span class="">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button"
                        data-slide="next">
                        <span aria-hidden=""></span>
                        <span>Next</span>
                    </a>
                </div>
            </div>

        </div>

        <div class="">
            <div class="col-md-12">
                <h2>Yoga</h2>
                <div class="form-group">
                    <input type="text" class="form-control search-input" data-target=".yoga-videos"
                        placeholder="Search videos by title">
                </div>
                <div class="yoga-videos">
                    <div class="video-container">
                        <h3 class="video-title">Video 5</h3>

                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/6cmyFw-Wrrk?si=3pCOSTERKnr7xw1g" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-container">
                        <h3 class="video-title">Video 6</h3>

                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/6cmyFw-Wrrk?si=3pCOSTERKnr7xw1g" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <h2>Pilates</h2>
                <div class="form-group">
                    <input type="text" class="form-control search-input" data-target=".pilates-videos"
                        placeholder="Search videos by title">
                </div>
                <div class="pilates-videos">
                    <div class="video-container">
                        <h3 class="video-title">Video 7</h3>

                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/6cmyFw-Wrrk?si=3pCOSTERKnr7xw1g" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-container">
                        <h3 class="video-title">Video 8</h3>

                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/6cmyFw-Wrrk?si=3pCOSTERKnr7xw1g" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/videos.js"></script>

</html>
</body>

</html>
