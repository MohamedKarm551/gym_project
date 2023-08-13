@include('layouts.headMember')
@yield('member')
{{-- بنفس الاسم تستخدمه في الصفحة التي تحمل المحتوى --}}
@include('layouts.footerMember')

{{-- me in page mamber.blade.php : 
    @extends('layouts.masterMember')
    @section('member')
    @endsection
    --}}
