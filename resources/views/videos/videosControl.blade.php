<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/videos.css') }}">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    {{-- <link rel="stylesheet" href="css/font-awesome.min.css"> --}}
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <title>Control The videos</title>
</head>


<body>
    <div class="container">
        <h1 data-toggle="tooltip" data-placement="top" title="قم بالتحكم بفيديوهات موقعك">Control The videos</h1>
        <div class="row row-cols-1 row-cols-md-3">
            @foreach ($sections as $section)
                <div class="col mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title" data-toggle="tooltip" data-placement="top"
                                title="قم بالتحكم بفيديوهات هذا السيكشن">{{ $section->title }}</h2>
                            <ul class="list-unstyled">
                                <p class="bg-warning text-center" data-toggle="tooltip" data-placement="top"
                                    title=" الفيديوهات الموجودة في  هذا السيكشن">Videos of Section</p>
                                @foreach ($section->videos as $video)
                                    <li
                                        class="d-flex justify-content-between align-items-center border rounded p-2 mb-2">
                                        <form action="{{ route('updateVideo', $video->id) }}" method="POST"
                                            class="update-video-form">
                                            @csrf
                                            @method('PUT')

                                            <input type="text" name="video_title" value="{{ $video->title }}"
                                                class="form-control mr-2 update-video-input">
                                            <input type="text" name="video_url" value="{{ $video->url }}"
                                            class="form-control mr-2 delete-video-input">
                                            <form action="{{ route('videos.video.delete', $video->id) }}" method="POST" class="delete-video-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-block">Delete Video</button>
                                            </form>
                                            <!-- Other fields for editing video as needed -->
                                            <input type="hidden" name="section_id" value="{{ $section->id }}">
                                        </form>
                                    </li>
                                @endforeach

                            </ul>
                            <p class="bg-warning text-center">Name of Section</p>
                            <form action="{{ route('updateSection', $section->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <input type="text" name="section_name" value="{{ $section->title }}" required
                                    class="form-control mb-2">
                                <!-- Other fields for editing section as needed -->

                                <button type="submit" class="btn btn-primary btn-block">Update Section</button>
                            </form>

                            <!-- Form for adding new videos to the section -->
                            <p class="bg-secondary mt-4 text-center"
                                style=" color: #fff; text-align: center; font-weight: bold;">Add Videos</p>
                            <form action="{{ route('storeVideo') }}" method="POST">
                                @csrf

                                <input type="hidden" name="section_id" value="{{ $section->id }}">
                                <input type="text" name="video_title" class="form-control mb-2"
                                    placeholder="Video Title" required>
                                <input type="text" name="video_url" class="form-control mb-2" placeholder="Video URL"
                                    required>
                                <!-- Other fields for adding video as needed -->

                                <button type="submit" class="btn btn-success btn-block">Add Video</button>
                            </form>

                            <!-- Delete Section Button -->
                            <form action="{{ route('deleteSection', $section->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-block mt-2">Delete Section</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- add section FORM --}}
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title" data-toggle="tooltip" data-placement="top" title="ثم بإضافة سيكشن جديد ">
                            Add New Section</h2>
                        <form action="{{ route('storeSection') }}" method="POST">
                            @csrf

                            <input type="text" name="section_name" class="form-control mb-2"
                                placeholder="Section Name" required>
                            <!-- Other fields for adding section as needed -->

                            <button type="submit" class="btn btn-success">Add Section</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // ترجمة العنوان 
        // عندما أقوم بالتعديل في أي انبت يتم تحديثه والضغط على صبميت
        // Initialize tooltips when the document is ready
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();

            // and when I modify the name, it is modified in the data base by submit
            const updateVideoInputs = document.querySelectorAll('.update-video-input');
            updateVideoInputs.forEach(input => {
                input.addEventListener('change', function() {
                    this.closest('.update-video-form').submit();
                });
            });
        });
    </script>

</body>

</html>
