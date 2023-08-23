@extends('videos.masterVideos')
    @section('videos')
    <div class="videos">
      
      <div class="container">
          <h1>Gym Videos</h1>
          <div class="cardio-videos">
              <div class="col-md-12">
                  <h2 class="title-Exercises">Cardio Exercises</h2>
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
                  <h2 class="title-Exercises">Strength Exercises</h2>
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
                                      frameborder="0" allowfullscreen ></iframe>
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
  
          <div class="yoga-videos">
              <div class="col-md-12">
                  <h2 class="title-Exercises">Yoga</h2>
                  <div class="form-group">
                      <input type="text" class="form-control search-input" data-target=".yoga-videos"
                          placeholder="Search videos by title">
                  </div>
                  <div class="carousel slide" id="carouselExampleIndicators3" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="video-container">
                                <h3 class="video-title">Video 1</h3>
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/6cmyFw-Wrrk?si=3pCOSTERKnr7xw1g" frameborder="0"
                                    allowfullscreen  ></iframe>
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
                    <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                        <span class="" aria-hidden=""></span>
                        <span class="">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                        <span aria-hidden=""></span>
                        <span>Next</span>
                    </a>
                </div>
              </div>
          </div>
          <div class="pilates-videos">
              <div class="col-md-12">
                  <h2 class="title-Exercises">Pilates</h2>
                  <div class="form-group">
                      <input type="text" class="form-control search-input" data-target=".pilates-videos"
                          placeholder="Search videos by title">
                  </div>
                  <div class="carousel slide" id="carouselExampleIndicators4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators4" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators4" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators4" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="video-container">
                                <h3 class="video-title">Video 1</h3>
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/6cmyFw-Wrrk?si=3pCOSTERKnr7xw1g" frameborder="0"
                                    allowfullscreen  ></iframe>
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
                    <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
                        <span class="" aria-hidden=""></span>
                        <span class="">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
                        <span aria-hidden=""></span>
                        <span>Next</span>
                    </a>
                </div>
              </div>
          </div>
      </div>
    </div>
    @endsection
 
