<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StuckInAI</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    {{-- <script src="/js/jquery.tinymce.min.js"></script> --}}
    {{-- <script src="/js/tiny.cloud.min.js"></script> --}}
    
    {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
    <script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5/tinymce.min.js"></script>

    @yield('js')
</head>

<body>

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    {{-- <script src="/js/jquery.tinymce.min.js"></script> --}}
    <script src="/js/main.js"></script>
</body>

</html>