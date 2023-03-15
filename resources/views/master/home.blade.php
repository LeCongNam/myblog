<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">


    <!--  Font Awesome -->
    <link href="/font/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="/font/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="/font/fontawesome/css/solid.min.css" rel="stylesheet">

    <!--  Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;1,300;1,400;1,700&display=swap"
          rel="stylesheet">

    {{-- Reset css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/responsive.css">
</head>

<body>
<header>
    <div class="container menu__top">
        <a href="/" class="logo">
            <img src="/storage/images/logo.jpg" alt="" class="logo__img">
        </a>

        <div class="search__box d-none d-sm-none d-lg-block">
            <form action="/search">
                <div class="search__group">
                    <input type="text" name="search" id="" placeholder="Tìm kiếm: bài viết, chủ đề...">
                    <button class="btn search__ic">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
        </div>

        <div class="heder__right">
            <div class="overlay"></div>
            <div class="btn__close">
                <i class="fa-solid fa-xmark"></i>
            </div>

            <nav class="main__menu">
                <li>
                        <span>
                            nodejs
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>

                    <ul class="sub__menu">
                        <li>
                            <a href="#">
                                ExpressJs
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Nestjs
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Electronjs
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                        <span>
                            PHP
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>

                    <ul class="sub__menu">
                        <li>
                            <a href="#">
                                Laravel
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                PHP Cơ bản
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                PHP MVC
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        HTML - CSS
                    </a>
                </li>
                <li>
                    <a href="#">
                        JavaScript
                    </a>
                </li>
                <li>
                    <a href="#">
                        Về tác giả
                    </a>
                </li>

                <li class="auth">

                    @if(!isset($user))
                        <span>
                            <i class="fa-solid fa-user"></i>
                        </span>

                        <ul class="sub__menu">
                            <li>
                                <a href="/signup">
                                    Sign In
                                </a>
                            </li>
                            <li>
                                <a href="/login">
                                    Login
                                </a>
                            </li>
                        </ul>

                    @else
                        <span>
                            <i class="fa-solid fa-user"></i>
                            <p>{{$user}}</p>
                        </span>

                        <ul class="sub__menu">
                            <li>
                                <a href="/signup">
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="/logout">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    @endif

                </li>
            </nav>
        </div>

        <div class="btn_menu">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
</header>

@section('slider')
@show

<div id="content" class="mt-lg-4">
    <div class="container">
        <div class="row">
            <!-- List News -->
            @yield('listnews')

            @yield('detail')

            <!-- SideBar -->
            <div class="col-lg-4 d-none d-md-block d-lg-block">
                <div class="sidebar">
                    <div class="about__me">
                        <p class="title">
                            About me
                        </p>
                        <div class="inf">
                            <img src="/storage/images/me.jpg" alt="">
                            <p class="myname">Lê Công Nam</p>
                        </div>

                    </div>

                    {{-- Popular --}}
                    @section('popular')
                    @show
                </div>
            </div>
        </div>

        {{-- Pagination --}}
        @section('pagination')
        @show

    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col">
                <p>
                    &copy; 2022 - lecongnamdev.com. Since 2021 - All Right Reserved. Developed by <strong>LE CONG
                        NAM</strong>
                </p>
            </div>
        </div>
    </div>
</footer>


<!-- scroll to top -->

<div class="scroll__top">
    <i class="fa-solid fa-chevron-up"></i>
</div>

<script src="/javascript/main.js"></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
