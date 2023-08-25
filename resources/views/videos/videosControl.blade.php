<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Control The videos</title>
</head>

<body>
    <h1>TEST</h1>

    <!-- Add Section Form -->
    <form action="{{ route('videos.section.store') }}" method="POST">
        @csrf
        <input type="text" name="section_name" placeholder="Enter Section Name">
        <button type="submit">Add Section</button>
    </form>

    {{-- @foreach ($sections as $section)
        <div class="{{ $section->title }}-videos">
            <div class="col-md-12">
                <h2 class="title-Exercises">{{ $section->title }} Exercises</h2>
                <div class="form-group">
                    <input type="text" class="form-control search-input" data-target=".{{ $section->slug }}-videos"
                        placeholder="Search videos by title">
                </div>
                <!-- Carousel and videos for the section -->
                <div class="carousel slide" id="carouselExampleIndicators{{ $section->id }}" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <!-- Indicators for videos -->
                    </ol>
                    <div class="carousel-inner {{ $section->title }}">
                        @foreach ($section->videos as $video)
                            <div class="carousel-item">
                                <div class="video-container">
                                    <h3 class="video-title">{{ $video->title }}</h3>
                                    <iframe width="560" height="315" src="{{ $video->url }}" frameborder="0"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach --}}

</body>

</html>
