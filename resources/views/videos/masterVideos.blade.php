@include('videos.head')
@yield('videos')
{{-- بنفس الاسم تستخدمه في الصفحة التي تحمل المحتوى --}}
@include('videos.footer')

{{-- me in page videos.blade.php : 
    @extends('videos.masterMember')
    @section('videos')
    ....code
    @endsection
    --}}
