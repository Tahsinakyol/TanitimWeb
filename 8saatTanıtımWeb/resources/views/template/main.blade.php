@include('template.head')
@include('template.menu')
@include('template.modal')
{{-- @include('template.preloader') --}}
@yield('content')
@include('template.footer')
@include('template.footer_script')
