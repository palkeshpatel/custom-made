<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body>
    <div class="page-wrapper">

       @include('includes.header')


           <!-- Preloader -->
		   {{-- <div class="preloader"></div> --}}
           @yield('content')


       @include('includes.footer')
    </div>

@include('includes.script')
</body>
</html>
