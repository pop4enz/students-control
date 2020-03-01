<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Вход</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="http://kurs.com/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="http://kurs.com/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="http://kurs.com/css/style.css" rel="stylesheet">
    <style>
        html, body, header, .carousel {
            height: 60vh;
        }
        @media (max-width: 740px){
            html, body, header, .carousel {
                height: 100vh;
            }
            @media (min-width: 800) and (max-width: 850px){
                html, body, header, .carousel {
                    height: 100vh;
                }
            }
    </style>
</head>

<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">
        <a href="http://www.bsuir.by" class="navbar-brand waves-effect">
            <img style="width: 40px;" src="bsuir.png">
            <strong class="blue-text">BSUIR</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="http://kurs.com" class="nav-link waves-effect">
                        Главная
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Факультеты
                        <span class="sr-only">(current)</span>
                    </a>
                    <div class="dropdown-menu dropdown-primary">
                        <a class="dropdown-item" href="http://kurs.com/fak_VF.html">Военный факультет</a>
                        <a class="dropdown-item" href="http://kurs.com/fak_IK.html">Инфокоммуникаций</a>
                        <a class="dropdown-item" href="http://kurs.com/fak_IE.html">Инженерно-экономический</a>
                        <a class="dropdown-item" href="http://kurs.com/fak_ITIU.html">Информационных технологий и управления</a>
                        <a class="dropdown-item" href="http://kurs.com/fak_KSIS.html">Компьютерных систем и сетей</a>
                        <a class="dropdown-item" href="http://kurs.com/fak_KP.html">Компьютерного проектирования</a>
                        <a class="dropdown-item" href="http://kurs.com/fak_RE.html">Радиотехники и электроники</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="http://kurs.com/specs/" class="nav-link waves-effect">
                        Специальности
                    </a>
                </li>
                <li class="nav-item">
                    <a href="http://kurs.com/stud" class="nav-link waves-effect">
                        Студенты
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<section class="sectstud">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container" style="padding-top: 85px;">
                <div class="card-header">Вход для администрации</div>

                <div class="card-body w-100">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail адрес</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Запомнить меня
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-light">
                                    Войти
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Забыли пароль?
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Footer -->
<footer class="page-footer font-small grey lighten-3 pt-4 text-dark">

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <hr class="clearfix w-100 d-md-none pb-3">

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Text -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://www.vk.com/pavel_lomako">Pavel Lomako</a>
    </div>
    <!-- Copyright -->

</footer>


<script>
    const {
        searchBox,
        hits
    } = instantsearch.widgets;

    search.addWidget(
        searchBox({ container: "#searchbox" })
    );
    search.addWidget(
        hits({ container: "#hits" })
    );
    search.start();
</script>

<!-- JQuery -->
<script type="text/javascript" src="http://kurs.com/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="http://kurs.com/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="http://kurs.com/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="http://kurs.com/js/mdb.min.js"></script>
</body>



