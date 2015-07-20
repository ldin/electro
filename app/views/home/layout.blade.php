<!DOCTYPE html>
<html lang="ru">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css?2007" rel="stylesheet">

    @yield('header')

 </head>

<body>

    <header>
        <div class="container top-block">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <h1><a href="/"> Электромонтаж + <span>свет, звук и все-все-все</span></a></h1>
                    <p>Любая электротехника. <br> Проектирование и монтаж.</p>
                </div>
                <div class="col-sm-4 col-xs-12 address">
                    <p>Москва и <br>Московская область</p>
                    <p>
                        <a href="tel:+79096246404">+7 909 624 64 04 </a><br> 
                        <a href="mailto:cenoura@yandex.ru">cenoura@yandex.ru</a>
                    </p>    
                </div>
            </div>
        </div>
        <nav class="navbar">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main-menu" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-main-menu">
              <ul class="nav navbar-nav">
                <li {{ (Request::is('/')) ? 'class="active"' : '' }}><a href="/">О нас <span class="sr-only">(current)</span></a></li>

                @if(isset($type_page))
                    @foreach($type_page as$type=>$page)
                        <li {{ (Request::is($type.'*')) ? 'class="active"' : '' }}>{{HTML::link($type, $page)}}</li>
                    @endforeach
                @endif

              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </header>

    <main>

        @yield('content')

    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-1-5 col-xs-12">
                    <p class="title-h1">Электромонтаж +</p>
                    <p>Любая электроника</p>
                    <p>Проектирование и монтаж</p>
                </div>
                <!-- <div class="col-sm-1-5 col-xs-12">
                    <p class="title">О компании</p>
                    <p>Портфолио</p>
                    <p>Сертификаты</p>
                    <p>Отзывы</p>
                </div>
                <div class="col-sm-1-5 col-xs-12">
                    <p class="title">Работы</p>
                    <p>Проектирование</p>
                    <p>Монтаж</p>
                    <p>Сопровождение</p>
                </div>
                <div class="col-sm-1-5 col-xs-12">
                    <p class="title">Преимущества</p>
                    <p>Партнерская программа</p>
                    <p>Скидки</p>
                    <p>Гарантии</p>
                </div> -->
                <div class="col-sm-1-5 col-xs-12 col-sm-offset-6">
                    <p>Москва и <br>Московская область</p>
                    <p>
                        <a href="tel:+79096246404">+7 909 624 64 04 </a><br> 
                        <a href="mailto:cenoura@yandex.ru">cenoura@yandex.ru</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

{{ HTML::script('/js/jquery-1.11.3.min.js') }}
{{ HTML::script('/js/bootstrap.min.js') }}
{{'';// HTML::script('/js/main.js') }}
@yield('scripts')

</body>

</html>
