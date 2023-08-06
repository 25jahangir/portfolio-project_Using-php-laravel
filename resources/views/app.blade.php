<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>{{$seo->title}}</title> --}}
    <title>Md Jahangir Alam</title>
    {{-- <meta name="description" content="{{$seo->description}}"/>
    <meta name="keywords" content="{{$seo->keywords}}"/>

    <meta name="og:site_name" content="{{$seo->ogSiteName}}"/>
    <meta name="og:url" content="{{$seo->ogUrl}}"/>
    <meta name="og:title" content="{{$seo->ogTitle}}"/>
    <meta name="og:image" content="{{$seo->ogImage}}"/>
    <meta name="og:description" content="{{$seo->ogDescription}}"/> --}}


    <link rel="icon" type="image/x-icon" href="{{asset('/favicon.ico')}}" />
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <script src="{{asset('js/axios.min.js')}}"></script>
   
    
</head>
<body class="d-flex flex-column h-100">
  
    @include('components.navber')
    @include('components.loder')

    <div class="" id="content-div">
        @yield('content')
    </div>

    @include('components.footer')

<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</body>
</html>