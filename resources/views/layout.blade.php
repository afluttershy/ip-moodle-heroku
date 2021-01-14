<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/css.css">
        <title>Регистрация на курсы Екатерины Шукаловой</title>
        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
    </head>
    <body>
        <!-- <header>
            <div class="content1">
                <a class="link" href="{{ url('/') }}">Курсы Екатерины Шукаловой
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile-upside-down" viewBox="0 0 16 16">
                    <path d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zm0-1a8 8 0 1 1 0 16A8 8 0 0 1 8 0z"/>
                    <path d="M4.285 6.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 4.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 3.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 9.5C7 8.672 6.552 8 6 8s-1 .672-1 1.5.448 1.5 1 1.5 1-.672 1-1.5zm4 0c0-.828-.448-1.5-1-1.5s-1 .672-1 1.5.448 1.5 1 1.5 1-.672 1-1.5z"/>
                    </svg>
                </a>
                <a>тел. +7 (999) 999-99-99</a>
                <div class="enter-logout">
                @guest
                    <a class="link" href="{{ url('/login') }}">Войти</a>
                @endguest
                @auth
                    <a href="{{ route('getlogout') }}" style="color:#E75536;">Выйти</a>
                    <a class="link" href="{{ url('/home') }}">Панель администратора</a>
                @endauth
                </div>
            </div>
            <div class="content2">
                <a class="link" href="{{ route('coursesinfo') }}">О курсах</a>
                <a class="link" href="{{ route('welcome') }}">Записаться</a>
            </div>
        </header> -->
        <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <p class="h5 my-0 me-md-auto fw-normal">CoolBTool - Курсы Екатерины Шукаловой</p>
            <nav class="my-2 my-md-0 me-md-3">
                <a class="p-2 text-dark" href="{{ route('coursesinfo') }}">О курсах</a>
                <a class="p-2 text-dark" href="{{ route('welcome') }}">Записаться</a>
                @auth
                    <a class="p-2 text-dark" href="{{ url('/home') }}">Панель администратора</a> 
                </nav>
                    <a href="{{ route('getlogout') }}" class="btn btn-outline-danger btn-enter">Выйти</a>
                @endauth
                @guest
                </nav>
                    <a  class="btn btn-outline-primary btn-enter" href="{{ url('/login') }}">Войти</a>
                @endguest
        </header>   

        @yield('content')
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</html>