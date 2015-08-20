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
                    <p class="label-txt"><a href="/"> Электромонтаж + <span>свет, звук и все-все-все</span></a></p>
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
            <div class="collapse navbar-collapse text-center" id="navbar-main-menu">
                <div class="inline-navbar">
                    <ul class="nav navbar-nav">
                        <li {{ (Request::is('/')) ? 'class="active"' : '' }}><a href="/">О нас <span class="sr-only">(current)</span></a></li>

                        @if(isset($type_page))
                            @foreach($type_page as$type=>$page)
                                <li {{ (Request::is($type.'*')) ? 'class="active"' : '' }}>{{HTML::link($type, $page)}}</li>
                            @endforeach
                        @endif

                  </ul>
                </div>  
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
{{ HTML::script('/js/main.js') }}
@yield('scripts')

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter31454463 = new Ya.Metrika({
                    id:31454463,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/31454463" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- BEGIN JIVOSITE CODE {literal} -->

<script type='text/javascript'>

(function(){ var widget_id = '5NDzybHSuF';

var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>

<!-- {/literal} END JIVOSITE CODE -->

</body>

</html>
