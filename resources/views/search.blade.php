<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Поиск</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
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

<!-- Header -->

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
                <li class="nav-item ">
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
                        <a class="dropdown-item" href="fak_VF.html">Военный факультет</a>
                        <a class="dropdown-item" href="fak_IK.html">Инфокоммуникаций</a>
                        <a class="dropdown-item" href="fak_IE.html">Инженерно-экономический</a>
                        <a class="dropdown-item" href="fak_ITIU.html">Информационных технологий и управления</a>
                        <a class="dropdown-item" href="fak_KSIS.html">Компьютерных систем и сетей</a>
                        <a class="dropdown-item" href="fak_KP.html">Компьютерного проектирования</a>
                        <a class="dropdown-item" href="fak_RE.html">Радиотехники и электроники</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="http://kurs.com/specs" class="nav-link waves-effect">
                        Специальности
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="http://kurs.com/stud" class="nav-link waves-effect">
                        Студенты
                    </a>
                </li>
                <li class="srch">
                    <form  id="searchform" action="{{ route('search') }}">
                        <input type="search" name="search">
                        <i class="fa fa-search"></i>
                    </form>
                </li>
        </div>
    </div>
</nav>

<!-- Slider -->

<div id="carousel-ex" class="carousel slide carousel-fade pt-5 " data-ride="carousel">
    <ol class="carousel-indicators">
        <li class="active" data-target="#carousel-ex" data-slide-to="0"></li>
        <li data-target="#carousel-ex" data-slide-to="1"></li>
        <li data-target="#carousel-ex" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view" style="background-image: url('0.jpeg'); background-repeat: no-repeat; background-size: cover;">
                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
                    <div class="text-center white-text mx-5 wow fadeIn">

                        <h1 class="mb-4">
                            <strong>Выбирай БГУИР!</strong>
                        </h1>

                        <p>
                            <strong>Развивайся вместе с нами! :)</strong>
                        </p>

                        <p class="mb-4 d-none d-md-block">
                            <strong>Начинай строить свое будущее уже сейчас!</strong>
                        </p>
                        <a href="http://www.bsuir.by" class="btn btn-outline-white btn-lg">Начать учиться! <i class="fa fa-graduation-cap ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="view" style="background-image: url('1.jpeg'); background-repeat: no-repeat; background-size: cover;">
                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
                    <div class="text-center white-text mx-5 wow fadeIn">

                        <h1 class="mb-4">
                            <strong>Выбирай БГУИР!</strong>
                        </h1>

                        <p>
                            <strong>Развивайся вместе с нами! :)</strong>
                        </p>

                        <p class="mb-4 d-none d-md-block">
                            <strong>Начинай строить свое будущее уже сейчас!</strong>
                        </p>
                        <a href="http://www.bsuir.by" class="btn btn-outline-white btn-lg">Начать учиться! <i class="fa fa-graduation-cap ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="view" style="background-image: url('2.jpeg'); background-repeat: no-repeat; background-size: cover;">
                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">
                    <div class="text-center white-text mx-5 wow fadeIn">

                        <h1 class="mb-4">
                            <strong>Выбирай БГУИР!</strong>
                        </h1>

                        <p>
                            <strong>Развивайся вместе с нами! :)</strong>
                        </p>

                        <p class="mb-4 d-none d-md-block">
                            <strong>Начинай строить свое будущее уже сейчас!</strong>
                        </p>
                        <a href="http://www.bsuir.by" class="btn btn-outline-white btn-lg">Начать учиться! <i class="fa fa-graduation-cap ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <a href="#carousel-ex" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a href="#carousel-ex" class="carousel-control-next" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
</div>


<section class="sectstud">
<div class="container">
<div class="row">
    @if($studs->isEmpty())
        <div class="container pt-3">
            <div class="alert alert-danger d-flex justify-content-center" role="alert">
                ПОИСК НЕ ДАЛ РЕЗУЛЬТАТОВ :(
            </div>
        </div>
    @else
@foreach ($studs as $stud)
    <div class="col-lg-3" style="padding-top:20px;">
        <div class="studcard shadow p-3 mb-5 bg-white rounded">
        <a style="text-decoration: none; color: black;" href="stud/{{ $stud->id }}">
            <h5 class="ml-2">{{ $stud->full_name }}</h5>
            <img class="ml-2" src="{{ $stud->imgpath }}" style="width:180px; height: 150px;margin-bottom: 10px;border:1px solid #2c3e50; -webkit-border-radius: 7px;-moz-border-radius: 7px;border-radius: 7px;">
                <h6 class="profstud ml-2"  title="{{ $stud->group->spec->fak->fakdesc }}">Факультет: {{$stud->group->spec->fak->nfak }}</h6>
                <h6 class="profstud ml-2"  title="{{ $stud->group->spec->specdesc }}">Специальность: {{$stud->group->spec->specname }}</h6>
                <h6 class="profstud ml-2" >№ Группы: {{ $stud->group->grname }}</h6>
        </a>
        </div>
    </div>
@endforeach
        @endif
</div>
</div>
    <div class="container d-flex justify-content-center">
    {{ $studs->links() }}
    </div>
    </section>

<!-- Footer -->
<footer class="page-footer font-small grey lighten-3 pt-4 text-dark">

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            {{--<!-- Grid column -->--}}
            {{--<div class="col-md-6 mt-md-0 mt-3">--}}

            {{--<!-- Content -->--}}
            {{--<h5 class="text-uppercase font-weight-bold">Footer text 1</h5>--}}
            {{--<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita sapiente sint, nulla, nihil repudiandae commodi voluptatibus corrupti animi sequi aliquid magnam debitis, maxime quam recusandae harum esse fugiat. Itaque, culpa?</p>--}}

            {{--</div>--}}
            {{--<!-- Grid column -->--}}

            <hr class="clearfix w-100 d-md-none pb-3">

        {{--<!-- Grid column -->--}}
        {{--<div class="col-md-6 mb-md-0 mb-3">--}}

        {{--<!-- Content -->--}}
        {{--<h5 class="text-uppercase font-weight-bold">Footer text 2</h5>--}}
        {{--<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio deserunt fuga perferendis modi earum commodi aperiam temporibus quod nulla nesciunt aliquid debitis ullam omnis quos ipsam, aspernatur id excepturi hic.</p>--}}

        {{--</div>--}}
        <!-- Grid column -->

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
<!-- Footer -->

<!-- SCRIPTS -->

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
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
