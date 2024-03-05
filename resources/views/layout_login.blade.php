<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title_login')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary"data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="login">&copy Test_website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto ms-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="login">ล็อกอิน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="create_register">สร้าสมาชิก</a>
                    </li>
                </ul></div>
        </div>
    </nav>
    <div class="container py-2">
        @yield('content_login')
    </div>
</body>

</html>
