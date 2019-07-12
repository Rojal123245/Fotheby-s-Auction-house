
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page_title')</title>     
    @include('main.css')
   @yield('custom_css')

</head>
<body>

@include('main.sidebar')
@include('main.header')

    <main class="py-4">
    <div class=" col-sm-12 col-md-12" style="z-index: 999 !important; width: 90%; margin-left: 10%;">
       @include('main.errorlog')
          @if(Session::has('message'))
          <p class="alert alert-success fashMessage" style="z-index: 99999 !important;">
           <a class="close " data-dismiss="alert" href="#">
               ×
           </a>
           {{session::get('message')}}
       </p>
       @endif
       </div>
        @yield('content')
    </main>
</div>
@include('main.footer')
@include('main.script')
@yield('custom_script')
</body>
</html>
