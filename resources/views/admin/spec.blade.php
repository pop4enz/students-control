<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Добавление специальности</title>
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
                <li class="nav-item">
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
            <div class="col-lg-4 w-100 d-flex justify-content-start pt-5">
                <div class="list-group">
                    <a href="http://kurs.com/admin/stud" class="list-group-item list-group-item-light" style="color:black;">Добавление студента</a>
                    <a href="http://kurs.com/admin/group" class="list-group-item list-group-item-light" style="color:black;">Добавление группы</a>
                    <a href="#" class="list-group-item list-group-item-light active" style="color:black;">Добавление специальности</a>
                    <a href="http://kurs.com/admin/predmet" class="list-group-item list-group-item-light" style="color:black;">Добавление предмета</a>
                    <a href="http://kurs.com/admin/ball" class="list-group-item list-group-item-light" style="color:black;">Добавление оценки</a>
                </div>
            </div>
            <div class="col-lg-4 w-100">
                <div class="row">
                        <form class="pt-2" id="studform" method="post" action="{{ route('admin.spec.add') }}">
                            <div class="form-group">
                                @csrf
                                <label for="specname">Сокращенное название:</label>
                                <input type="text" class="form-control" name="specname"/>
                                <label for="specdesc">Полное название:</label>
                                <input type="text" class="form-control" name="specdesc"/>
                                <label for="fak_id">Факультет:</label>
                                <select class="browser-default custom-select" name="fak_id" form="studform">
                                    @foreach($faks as $fak)
                                        <option value="{{ $fak->id }}" title="{{ $fak->fakdesc }}">{{ $fak->nfak }}</option>
                                    @endforeach
                                </select>
                                <label for="spectext">Описание специальности:</label>
                                <textarea class="form-control rounded-0" id="spectext" name="spectext" rows="3" placeholder="Краткое описание"></textarea>
                            </div>
                            <button type="submit" class="btn btn-light">Добавить</button>
                        </form>
                </div>
            </div>
            <div class="col-lg-4 w-100 d-flex justify-content-start pt-5">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-light active" style="color:black;">Добавление</a>
                    <a href="http://kurs.com/admin/specedit" class="list-group-item list-group-item-light" style="color:black;">Изменение</a>
                    <a href="http://kurs.com/admin/specdel" class="list-group-item list-group-item-light" style="color:black;">Удаление</a>
                </div>
            </div>
        </div>
        @if ($errors->any())
            <div class="row">
                <div class="container">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
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