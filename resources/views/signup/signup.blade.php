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


    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
 

    <div class="login-page">
        <div class="avatar">
          <img src="https://cdn.pixabay.com/photo/2014/04/02/14/10/female-306407_960_720.png" alt="Avatar">
        </div>
        <div class="form">
          <h2>Login</h2>
          <form>
            <input type="text" placeholder="Username">
            <input type="password" placeholder="Password">
            <button>Log in</button>
          </form>
          <p class="message">Have An Acount? <a href="/login">Create an account</a></p>
          <p class="message">Forgot your password? <a href="/forgot-password">Click here to reset it</a></p>
        </div>
      </div>


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
