<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Family Tree</title>
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('/css/family-tree.css')}}">
    <link href="{{ asset('css/loading.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar-expand-lg navbar-dark bg-secondary fixed-top">
        <div class="container text-center">
            <a href="/" class="navbar-brand "> <h6>Family Tree</h6></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

<div id="app">
    <family></family>
</div>

<footer class="footer py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website {{ date('D-M-Y') }}</p>
    </div>
</footer>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
