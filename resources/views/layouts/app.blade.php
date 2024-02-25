<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/owl-carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/paymentfont.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/slider-radio.css')}}">
    <link rel="stylesheet" href="{{asset('/css/plyr.css')}}">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    <link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="icon/favicon-32x32.png">
    <title>Volna</title>
</head>
<body>

<header class="header">
    <div class="header__content">
        <div class="header__logo">
            <a href="{{route('staticpages.home')}}">
                <img src="img/logo.svg" alt="">
            </a>
        </div>
        <form action="#" class="header__search">
            <input type="text" placeholder="Введите название артиста, альбома, песни или подкаста...">
            <button type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/>
                </svg>
            </button>
            <button type="button" class="close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/>
                </svg>
            </button>
        </form>
        @if(True)
            <div class="header__action header__action--signin">
                <a class="header__action-btn" href="{{route('auth.signin.get')}}">
                    <span>Войти</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M20,12a1,1,0,0,0-1-1H11.41l2.3-2.29a1,1,0,1,0-1.42-1.42l-4,4a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l4,4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L11.41,13H19A1,1,0,0,0,20,12ZM17,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V16a1,1,0,0,0-2,0v3a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V8a1,1,0,0,0,2,0V5A3,3,0,0,0,17,2Z"/>
                    </svg>
                </a>
            </div>
        @else
            <div class="header__action header__action--signin">
                <a class="header__action-btn" href="{{route('auth.signin.get')}}">
                    <span>Egor Grudin</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M14.81,12.28a3.73,3.73,0,0,0,1-2.5,3.78,3.78,0,0,0-7.56,0,3.73,3.73,0,0,0,1,2.5A5.94,5.94,0,0,0,6,16.89a1,1,0,0,0,2,.22,4,4,0,0,1,7.94,0A1,1,0,0,0,17,18h.11a1,1,0,0,0,.88-1.1A5.94,5.94,0,0,0,14.81,12.28ZM12,11.56a1.78,1.78,0,1,1,1.78-1.78A1.78,1.78,0,0,1,12,11.56ZM19,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2Zm1,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"></path>
                    </svg>
                </a>
            </div>
        @endif
        <button class="header__btn" type="button">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<div class="sidebar">
    <div class="sidebar__logo">
        <img src="img/logo.svg" alt="">
    </div>
    <ul class="sidebar__nav" style="padding: 30px 0 0;">
        @if(request()->route()->getName() == 'staticpages.home')
            <li class="sidebar__nav-item">
                <a href="{{route('staticpages.home')}}" class="sidebar__nav-link sidebar__nav-link--active">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M20,8h0L14,2.74a3,3,0,0,0-4,0L4,8a3,3,0,0,0-1,2.26V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V10.25A3,3,0,0,0,20,8ZM14,20H10V15a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H16V15a3,3,0,0,0-3-3H11a3,3,0,0,0-3,3v5H6a1,1,0,0,1-1-1V10.25a1,1,0,0,1,.34-.75l6-5.25a1,1,0,0,1,1.32,0l6,5.25a1,1,0,0,1,.34.75Z"></path>
                    </svg>
                    <span>Главная</span>
                </a>
            </li>
        @else
            <li class="sidebar__nav-item">
                <a href="{{route('staticpages.home')}}" class="sidebar__nav-link sidebar__nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M20,8h0L14,2.74a3,3,0,0,0-4,0L4,8a3,3,0,0,0-1,2.26V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V10.25A3,3,0,0,0,20,8ZM14,20H10V15a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H16V15a3,3,0,0,0-3-3H11a3,3,0,0,0-3,3v5H6a1,1,0,0,1-1-1V10.25a1,1,0,0,1,.34-.75l6-5.25a1,1,0,0,1,1.32,0l6,5.25a1,1,0,0,1,.34.75Z"></path>
                    </svg>
                    <span>Главная</span>
                </a>
            </li>
        @endif


            @if(request()->route()->getName() == 'authors.review')
                <li class="sidebar__nav-item">
                    <a href="{{route('authors.review')}}" class="sidebar__nav-link sidebar__nav-link--active">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z"></path>
                        </svg>
                        <span>Артисты</span>
                    </a>
                </li>
            @else
                <li class="sidebar__nav-item">
                    <a href="{{route('authors.review')}}" class="sidebar__nav-link sidebar__nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z"></path>
                        </svg>
                        <span>Артисты</span>
                    </a>
                </li>
            @endif


        <li class="sidebar__nav-item">
            <a href="{{route('albums.review')}}" class="sidebar__nav-link sidebar__nav-link">
                <svg width="800px" height="800px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 12a2 2 0 1 1 4 0 2 2 0 0 1-4 0Z"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10Zm0-6a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"/>
                </svg>
                <span>Альбомы</span>
            </a>
        </li>
        <li class="sidebar__nav-item">
            <a href="{{route('genres.review')}}" class="sidebar__nav-link sidebar__nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z"></path>
                </svg>
                <span>Жанры</span>
            </a>
        </li>
        <li class="sidebar__nav-item">
            <a href="{{route('charts.review')}}" class="sidebar__nav-link sidebar__nav-link">
                <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 21H7.8C6.11984 21 5.27976 21 4.63803 20.673C4.07354 20.3854 3.6146 19.9265 3.32698 19.362C3 18.7202 3 17.8802 3 16.2V3M15 10V17M7 13V17M19 5V17M11 7V17" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Топ-чарты</span>
            </a>
        </li>
        <li class="sidebar__nav-item">
            <a href="{{route('podcasts.review')}}" class="sidebar__nav-link sidebar__nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12,15a4,4,0,0,0,4-4V5A4,4,0,0,0,8,5v6A4,4,0,0,0,12,15ZM10,5a2,2,0,0,1,4,0v6a2,2,0,0,1-4,0Zm10,6a1,1,0,0,0-2,0A6,6,0,0,1,6,11a1,1,0,0,0-2,0,8,8,0,0,0,7,7.93V21H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2H13V18.93A8,8,0,0,0,20,11Z"></path>
                </svg>
                <span>Подкасты</span>
            </a>
        </li>
        <li class="sidebar__nav-item">
            <a href="{{route('audiobooks.review')}}" class="sidebar__nav-link sidebar__nav-link">
                <svg id="Layer_1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <path d="m83.333 50v-6.667c0-18.405-14.918-33.333-33.333-33.333-18.412 0-33.333 14.928-33.333 33.333v6.667c-3.667 0-6.667 3.001-6.667 6.667v20c0 3.665 3 6.666 6.667 6.666h11.667v-33.333h-5v-6.667c-.001-14.723 11.936-26.666 26.666-26.666 14.729 0 26.667 11.943 26.667 26.667v6.666h-5v33.333h11.666c3.666 0 6.667-3.001 6.667-6.666v-20c0-3.666-3.001-6.667-6.667-6.667z"></path>
                    <path d="m60 72.256-11.667 5.833v-34.756h-15v46.667h33.334v-14.411z"></path>
                    <path d="m66.667 70-6.667-3.333-6.667 3.333v-26.667h13.334z"></path>
                </svg>
                <span>Аудиокниги</span>
            </a>
        </li>
        <li class="sidebar__nav-item">
            <a href="{{route('broadcasts.review')}}" class="sidebar__nav-link sidebar__nav-link">
                <svg width="800px" height="800px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 11.75c-2.347 0-4.25 1.903-4.25 4.25s1.903 4.25 4.25 4.25c2.347 0 4.25-1.903 4.25-4.25v0c-0.003-2.346-1.904-4.247-4.25-4.25h-0zM16 17.75c-0.966 0-1.75-0.784-1.75-1.75s0.784-1.75 1.75-1.75c0.966 0 1.75 0.784 1.75 1.75v0c-0.001 0.966-0.784 1.749-1.75 1.75h-0zM3.25 16c0.211-3.416 1.61-6.471 3.784-8.789l-0.007 0.008c0.223-0.226 0.361-0.536 0.361-0.879 0-0.69-0.56-1.25-1.25-1.25-0.344 0-0.655 0.139-0.881 0.363l0-0c-2.629 2.757-4.31 6.438-4.506 10.509l-0.001 0.038c0.198 4.109 1.879 7.79 4.514 10.553l-0.006-0.006c0.226 0.228 0.54 0.369 0.886 0.369 0.69 0 1.249-0.559 1.249-1.249 0-0.346-0.141-0.659-0.368-0.885l-0-0c-2.173-2.307-3.573-5.363-3.774-8.743l-0.002-0.038zM9.363 16c0.149-2.342 1.109-4.436 2.6-6.026l-0.005 0.005c0.224-0.226 0.363-0.537 0.363-0.88 0-0.69-0.56-1.25-1.25-1.25-0.345 0-0.657 0.139-0.883 0.365l0-0c-1.94 2.035-3.179 4.753-3.323 7.759l-0.001 0.028c0.145 3.032 1.384 5.75 3.329 7.79l-0.005-0.005c0.226 0.228 0.54 0.369 0.886 0.369 0.69 0 1.249-0.559 1.249-1.249 0-0.346-0.141-0.659-0.368-0.885l-0-0c-1.49-1.581-2.451-3.676-2.591-5.993l-0.001-0.027zM26.744 5.453c-0.226-0.227-0.54-0.368-0.886-0.368-0.691 0-1.251 0.56-1.251 1.251 0 0.345 0.139 0.657 0.365 0.883l-0-0c2.168 2.31 3.567 5.365 3.775 8.741l0.002 0.040c-0.21 3.417-1.609 6.471-3.784 8.789l0.007-0.008c-0.224 0.226-0.362 0.537-0.362 0.88 0 0.691 0.56 1.251 1.251 1.251 0.345 0 0.657-0.14 0.883-0.365l-0 0c2.628-2.757 4.308-6.439 4.504-10.509l0.001-0.038c-0.198-4.108-1.878-7.79-4.512-10.553l0.006 0.007zM21.811 8.214c-0.226-0.224-0.537-0.363-0.881-0.363-0.69 0-1.25 0.56-1.25 1.25 0 0.343 0.138 0.653 0.361 0.879l-0-0c1.486 1.585 2.447 3.678 2.594 5.992l0.001 0.028c-0.151 2.343-1.111 4.436-2.601 6.027l0.005-0.005c-0.224 0.226-0.362 0.537-0.362 0.88 0 0.691 0.56 1.251 1.251 1.251 0.345 0 0.657-0.14 0.883-0.365l-0 0c1.939-2.036 3.178-4.754 3.323-7.759l0.001-0.028c-0.145-3.033-1.385-5.751-3.331-7.791l0.005 0.005z"/>
                </svg>
                <span>Эфиры</span>
            </a>
        </li>
        <li class="sidebar__nav-item">
            <a href="{{route('news.review')}}" class="sidebar__nav-link sidebar__nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M16,14H8a1,1,0,0,0,0,2h8a1,1,0,0,0,0-2Zm0-4H10a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Zm4-6H17V3a1,1,0,0,0-2,0V4H13V3a1,1,0,0,0-2,0V4H9V3A1,1,0,0,0,7,3V4H4A1,1,0,0,0,3,5V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V5A1,1,0,0,0,20,4ZM19,19a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V6H7V7A1,1,0,0,0,9,7V6h2V7a1,1,0,0,0,2,0V6h2V7a1,1,0,0,0,2,0V6h2Z"></path>
                </svg>
                <span>Новости</span>
            </a>
        </li>
    </ul>


</div>


@yield('main')

<footer class="footer">


                    <small class="footer__copyright">© Volna, 2024. Created by <a href="/" target="_blank">Egor Grudin</a>.</small>




</footer>

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/smooth-scrollbar.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/slider-radio.js"></script>
<script src="js/jquery.inputmask.min.js"></script>
<script src="js/plyr.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
