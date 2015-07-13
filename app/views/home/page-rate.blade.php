@extends('home.layout')

@section('title')
    {{ !empty($row->title)? $row->title:(!empty($type->title)? $type->title:('Тиера')) }}
@stop

@section('content')

    <div id="content" class="container page-rate">

        <div class="col-xs-12 col-sm-2">

            @if(isset($posts)&&count($posts)>0)
                <ul class="menu-page">
                    @foreach($posts as $post)
                        <li {{ (Request::is( $type->type.'/'.$post->slug)) ? 'class="active"' : '' }} >{{ HTML::link('/rate/'.$post->slug, $post->name) }}</li>
                    @endforeach
                </ul>
            @endif

            <div class="connection-test">
                <p><a href="/#connection_test" class="connect">Проверить возможность подключения</a></p>
            </div>

        </div> <!-- /.col-sm-2 -->
        <div class="col-xs-12 col-sm-8">
            <div id="rate-inet">
            <form>
                <p  class="page-title">{{ $type->title }}</p>
                <p  class="page-title">Выберите услуги и рассчитайте их стоимость:</p>

                <h2><img src="/img/I-net-Ico.png"> Интернет</h2>

                @if(isset($row['inet'])&&count($row['inet'])>0)
                    <table class="rate-inet">
                        @foreach($row['inet'] as $row_key=>$rateInet_row)
                            <tr>
                                @if($row_key==0)
                                    <td></td>
                                @endif
                                @foreach($rateInet_row as $el_key=>$rateInet_el)
                                        <td>{{ $rateInet_el }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </table><br /><br />
                @else
                    <table class="rate-inet">
                        <tr><td></td><td>12 мес</td><td>6 мес</td><td>1 мес</td></tr>
                        <tr><td>30 Mbit</td><td></td><td></td><td></td></tr>
                        <tr><td>50 Mbit</td><td></td><td></td><td></td></tr>
                        <tr><td>100 Mbit</td><td></td><td></td><td></td></tr>
                    </table>
                @endif

                <div class="">
                    <p>Дополнительно:</p>

                    @if(isset($row['inetOption'])&&count($row['inetOption'])>0)
                        @foreach($row['inetOption'] as $row_key=>$check)
                            <p> <input type="checkbox" value="{{$check->price}}" name=''> {{$check->name}} <span class="data-title" data-title="{{$check->description}}">(Что это?)</span> <b>{{$check->price}}</b> руб/мес </p>
                        @endforeach
                    @endif

                </div>
                <div class="itog itog-inet">
                    <p>
                        Стоимость подключения за <span id="itogMonth">0</span> мес: <b><span id="itogInetAll">0</span></b> руб (<span id="itogInetMonth">0</span> руб/мес)
                    </p>
                </div>
                <div class="row">

                    <div class="col-xs-7">
                        <p>Подключить и оплатить услугу можно в <a href="#">личном кабинете</a></p>
                    </div>
                </div>
            </form>
            </div><!-- /#rate-inet -->

            <div id="rate-tv">
            <form>
                <h2><img src="/img/TV-Tarif-Ico.png"> Цифровое телевидение</h2>

                 @if(isset($row['tv'])&&count($row['tv'])>0)
                    <table class="rate-tv">
                        <tr class="title">
                            <td colspan="3">Выберите дополнительные пакеты каналов:</td>
                        </tr>
                        @foreach($row['tv'] as $row_key=>$elem_tv)
                            <tr class="main">
                                <td>{{ $elem_tv->name }}</td>
                                <td>
                                    {{ $elem_tv->subject }}
                                    <p class="open-icon"><a href="#" class="img-circle circle" onclick="diplay_hide('#parts-{{$row_key}}', this);return false;"><i class="glyphicon glyphicon-menu-down"></i></a></p>
                                </td>
                                <td>{{ $elem_tv->price }}</td>
                            </tr>
                            <tr  id="parts-{{$row_key}}" class="description">
                                <td></td><td>
                                    <div >
                                        {{ $elem_tv->description }}
                                    </div>
                                </td><td></td>
                            </tr>
                        @endforeach
                    </table>
                @endif


                <div class="itog itog-tv">
                    <p>
                        Стоимость подключения за 1 мес: <b><span id="itogTvAll">0</span></b> руб
                    </p>
                </div>
                <div class="row">

                    <div class="col-xs-7">
                        <p>Подключить и оплатить пакет можно в <a href="#">личном кабинете</a></p>
                    </div>
                </div>
            </form>
            </div> <!-- /#rate-tv -->

        </div> <!-- /.col-sm-8 -->

    </div> <!-- /.page-rate -->

@stop


@section('scripts')
    {{ HTML::script('/js/calc-rate.js') }}
@stop
