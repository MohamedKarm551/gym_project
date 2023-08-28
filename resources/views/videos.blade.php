@extends('videos.masterVideos')
@section('videos')
    <div class="videos">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2">
            <a class="navbar-brand" href="{{ url('/') }}">
                <div class="logo">
                    <img src="img/logo(3).png" alt="logo" style="width:70px">
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/videos">Videos <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h1><img id="dynamic-image" src="img/nav01.png" alt="menu-bar image " width="50px"> Gym Videos <img
                    id="dynamic-image" src="img/nav01.png" alt="menu-bar image " width="50px"></h1>
            {{-- loop for sections --}}
            @foreach ($sections as $index => $section)
                <div class="{{ $section->title }}-videos">
                    <div class="col-md-12">
                        <h2 class="title-exercises">{{ $section->title }}</h2>
                        <div class="form-group">
                            <input type="text" class="form-control search-input"
                                data-target=".{{ $section->title }}-videos" placeholder="Search videos by title">
                        </div>
                        <div class="carousel slide" id="carouselExampleIndicators{{ $index }}" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach ($section->videos as $videoIndex => $video)
                                    <li data-target="#carouselExampleIndicators{{ $index }}"
                                        data-slide-to="{{ $videoIndex }}" class="{{ $videoIndex === 0 ? 'active' : '' }}">
                                    </li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach ($section->videos as $videoIndex => $video)
                                    <div class="carousel-item {{ $videoIndex === 0 ? 'active' : '' }}">
                                        <div class="video-container p-4">
                                            <h3 class="video-title">{{ $video->title }}</h3>
                                            <h4 class="text-muted">{{ $video->title }}</h4>
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="{{ $video->url }}"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators{{ $index }}"
                                role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators{{ $index }}"
                                role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection
