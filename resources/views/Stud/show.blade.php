<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $stud->full_name }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
<!-- Header -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">
        <a href="http://www.bsuir.by" class="navbar-brand waves-effect">
            <img style="width: 40px;" src="http://kurs.com/bsuir.png">
            <strong class="blue-text">BSUIR</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a href="http://kurs.com/" class="nav-link waves-effect">
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
            </ul>
        </div>
    </div>
</nav>
<br>
<br>
<br>
<section class="sectstud pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <img src="http://kurs.com/{{ $stud->imgpath }}" style="width:180px; height: 150px; margin-left:10px;margin-top:10px;border:1px solid #2c3e50;-webkit-border-radius: 7px;-moz-border-radius: 7px;border-radius: 7px;">
                        <h5 class="mt-3 ml-2">{{ $stud->full_name }}</h5>
                        <h6 class="profstud ml-2" title="{{ $stud->group->spec->fak->fakdesc }}">Факультет: {{$stud->group->spec->fak->nfak }}</h6>
                        <h6 class="profstud ml-2" title="{{ $stud->group->spec->specdesc }}">Специальность: {{$stud->group->spec->specname }}</h6>
                        <h6 class="profstud ml-2" >№ Группы: {{ $stud->group->grname }}</h6>
                        <h6 class="profstud ml-2" >Форма обучения: {{  $stud->form->nform }}</h6>
                    </div>
                    @if(!($balstud === null))
                    <div class="">
                        <table class="tableball">
                            <tr class="">
                                <td title="">
                                    Средний балл
                                </td>
                                <td>
                                    {{ $balstud->rate }}
                                </td>
                            </tr>
                        </table>
                    </div>
                        @endif
                </div>

            </div>
            <div class="col-lg-8">
                <div class="row">
                    @if(!($balli1->isEmpty()))
                        <div class="tablestud col-lg-3">
                            <h4 class="tablename d-flex justify-content-center">1-й семестр</h4>
                            <table class="tableball">
                                @foreach($balli1 as $ball)
                                    <tr class="">
                                        <td title="{{ $ball->predmet->fname }}">
                                                {{ $ball->predmet->predname }}
                                        </td>
                                        <td >
                                            <span class="d-flex justify-content-center">{{ $ball->ball }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    @endif
                    @if(!($balli2->isEmpty()))
                        <div class="tablestud col-lg-3">
                            <h4 class="tablename d-flex justify-content-center">2-й семестр</h4>
                            <table class="tableball">
                                @foreach($balli2 as $ball)
                                    <tr>
                                        <td title="{{ $ball->predmet->fname }}">
                                            {{ $ball->predmet->predname }}
                                        </td>
                                        <td>
                                            <span class="d-flex justify-content-center">{{ $ball->ball }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    @endif
                    @if(!($balli3->isEmpty()))
                        <div class="tablestud col-lg-3">
                            <h4 class="tablename d-flex justify-content-center">3-й семестр</h4>
                            <table class="tableball">
                                @foreach($balli3 as $ball)
                                    <tr>
                                        <td title="{{ $ball->predmet->fname }}">
                                            {{ $ball->predmet->predname }}
                                        </td>
                                        <td>
                                            <span class="d-flex justify-content-center">{{ $ball->ball }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    @endif
                    @if(!($balli4->isEmpty()))
                        <div class="tablestud col-md-3">
                            <h4 class="tablename d-flex justify-content-center">4-й семестр</h4>
                            <table class="tableball">
                                @foreach($balli4 as $ball)
                                    <tr>
                                        <td title="{{ $ball->predmet->fname }}">
                                            {{ $ball->predmet->predname }}
                                        </td>
                                        <td>
                                            <span class="d-flex justify-content-center">{{ $ball->ball }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    @endif
                    @if(!($balli5->isEmpty()))
                        <div class="tablestud col-md-3 pt-3">
                            <h4 class="tablename d-flex justify-content-center">5-й семестр</h4>
                            <table class="tableball">
                                @foreach($balli5 as $ball)
                                    <tr>
                                        <td title="{{ $ball->predmet->fname }}">
                                            {{ $ball->predmet->predname }}
                                        </td>
                                        <td>
                                            <span class="d-flex justify-content-center">{{ $ball->ball }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </table class="tableball">
                        </div>
                    @endif
                    @if(!($balli6->isEmpty()))
                        <div class="tablestud col-md-3 pt-3">
                            <h4 class="tablename d-flex justify-content-center">6-й семестр</h4>
                            <table class="tableball">
                                @foreach($balli6 as $ball)
                                    <tr>
                                        <td title="{{ $ball->predmet->fname }}">
                                            {{ $ball->predmet->predname }}
                                        </td>
                                        <td>
                                            <span class="d-flex justify-content-center">{{ $ball->ball }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    @endif
                    @if(!($balli7->isEmpty()))
                        <div class="tablestud col-md-3 pt-3">
                            <h4 class="tablename d-flex justify-content-center">7-й семестр</h4>
                            <table class="tableball">
                                @foreach($balli7 as $ball)
                                    <tr>
                                        <td title="{{ $ball->predmet->fname }}">
                                            {{ $ball->predmet->predname }}
                                        </td>
                                        <td>
                                            <span class="d-flex justify-content-center">{{ $ball->ball }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    @endif
                    @if(!($balli8->isEmpty()))
                        <div class="tablestud col-md-3 pt-3">
                            <h4 class="tablename d-flex justify-content-center">8-й семестр</h4>
                            <table class="tableball">
                                @foreach($balli8 as $ball)
                                    <tr>
                                        <td title="{{ $ball->predmet->fname }}">
                                            {{ $ball->predmet->predname }}
                                        </td>
                                        <td>
                                            <span class="d-flex justify-content-center">{{ $ball->ball }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    @endif
                </div>
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


<script type="text/javascript" src="http://kurs.com/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="http://kurs.com/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="http://kurs.com/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="http://kurs.com/js/mdb.min.js"></script>
</body>
</html>