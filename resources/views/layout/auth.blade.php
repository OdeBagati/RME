<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container-fluid vh-100">
        <div class="row">
            <div class="col-md-6 col-12 bg-success">
                <div class="d-flex align-items-center justify-content-center vh-100">
                    <div class="col-10">
                        <div class="card">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 vh-100" style="background-image: url(https://sumenepkab.go.id/uploads/images/news_news/sumenep_1597835406.jpg); ?>); background-repeat: no-repeat; background-size: cover;"></div>
        </div>
    </div>

    <script src="{{ ('assets/js/jquery.js') }}"></script>
    <script src="{{ ('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>