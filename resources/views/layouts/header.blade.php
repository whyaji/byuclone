<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/watchlist-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/calculator-style.css') }}">

    <title>blog.U - Creativity takes courages</title>
</head>

<body>
    <!--==================== Header ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <div class="nav__btns">
                <!-- theme change button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-bars"></i>
                </div>
            </div>
            <a href="#" class="nav__logo">blog.U</a>
            <div class="nav__menu" id="nav-menu">
                <i class="uil uil-times nav__close" id="nav-close"></i>
                <ul class="nav__list">
                    <li class="nav__item nav__end-list">
                        <a href="" class="nav__link nav__end-item">
                            <div class="nav__link-item">
                                Login
                            </div>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="{{url('/')}}" class="nav__link">
                            <div class="nav__link-item">
                                Home
                            </div>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="{{url('/news')}}" class="nav__link">
                            <div class="nav__link-item">
                                News
                            </div>
                        </a>
                        <div class="sub__menu">
                            <ul class="sub__nav list__sub-menu">
                                <li><a class="sub__menu-content" href="">Viral</a></li>
                                <li><a class="sub__menu-content" href="">Figur</a></li>
                                <li><a class="sub__menu-content" href="">Kreatif</a></li>
                                <li><a class="sub__menu-content" href="">Sport</a></li>
                                <li><a class="sub__menu-content" href="">Tekno</a></li>
                                <li><a class="sub__menu-content" href="">Trend</a></li>
                                <li><a class="sub__menu-content" href="">POP</a></li>
                                <li><a class="sub__menu-content" href="">ESENSI</a></li>
                            </ul>
                        </div>
                    </li>
                    <div class="sub__menu-hide">
                        <ul class="sub__nav-menu list__sub-menu">
                            <li class="nav__item"><a class="nav__link sub__menu-content" href="">Viral</a></li>
                            <li class="nav__item"><a class="nav__link sub__menu-content" href="">Figur</a></li>
                            <li class="nav__item"><a class="nav__link sub__menu-content" href="">Kreatif</a></li>
                            <li class="nav__item"><a class="nav__link sub__menu-content" href="">Sport</a></li>
                            <li class="nav__item"><a class="nav__link sub__menu-content" href="">Tekno</a></li>
                            <li class="nav__item"><a class="nav__link sub__menu-content" href="">Trend</a></li>
                            <li class="nav__item"><a class="nav__link sub__menu-content" href="">POP</a></li>
                            <li class="nav__item"><a class="nav__link sub__menu-content" href="">ESENSI</a></li>
                        </ul>
                    </div>
                    <li class="nav__item">
                        <a href="#" class="nav__link">
                            <div class="nav__link-item">
                                Apps
                            </div>
                        </a>
                        <div class="sub__menu">
                            <ul class="sub__nav list__sub-menu sub__menu-app">
                                <li><a class="sub__menu-content" href="{{url('/calculator')}}">Calculator</a></li>
                                <li><a class="sub__menu-content" href="{{url('/watchlist')}}">Watch List</a></li>
                            </ul>
                        </div>
                    </li>
                    <div class="sub__menu-hide">
                        <ul class="sub__nav-menu list__sub-menu">
                            <li class="nav__item"><a class="nav__link sub__menu-content" href="{{url('/calculator')}}">Calculator</a></li>
                            <li class="nav__item"><a class="nav__link sub__menu-content" href="{{url('/watchlist')}}">Watch List</a></li>
                        </ul>
                    </div>
                    <li class="nav__item">
                        <a href="#" class="nav__link">
                            <div class="nav__link-item">
                                Other
                            </div>
                        </a>
                        <div class="sub__menu">
                            <ul class="sub__nav list__sub-menu sub__menu-app">
                                <li><a class="sub__menu-content" href="tugas1.php">Mod4 Tugas1</a></li>
                                <li><a class="sub__menu-content" href="tugas2.php">Mod4 Tugas2</a></li>
                                <li><a class="sub__menu-content" href="tugas3.php">Mod4 Tugas3</a></li>
                            </ul>
                        </div>
                    </li>
                    <div class="sub__menu-hide">
                        <ul class="sub__nav-menu list__sub-menu">
                            <li class="nav__item"><a class="nav__link sub__menu-content" href="tugas1.php">Mod4 Tugas1</a></li>
                            <li class="nav__item"><a class="nav__link sub__menu-content" href="tugas2.php">Mod4 Tugas2</a></li>
                            <li class="nav__item"><a class="nav__link sub__menu-content" href="tugas1.php">Mod4 Tugas1</a></li>
                            <li class="nav__item"><a class="nav__link sub__menu-content" href="tugas3.php">Mod4 Tugas3</a></li>
                        </ul>
                    </div>
                    <li class="nav__item">
                        <a href="{{url('/author')}}" class="nav__link">
                            <div class="nav__link-item">
                                Author
                            </div>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">
                            <div class="nav__link-item">
                                Kenapa by.U
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <li class="nav__end">
                    <a href="" class="nav__item nav__link nav__end-show">
                        Dapatkan Sim Card
                    </a>
                    <a class="nav__link nav__end-spacer nav__end-hide">|</a>
                    <a href="" class="nav__item nav__link nav__end-hide">
                        Login
                    </a>
                </li>
            </div>
        </nav>
    </header>