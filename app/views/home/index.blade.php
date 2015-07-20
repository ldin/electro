@extends('home.layout')

@section('title') Электромонтаж в загородных домах Москвы и Московской области @stop

@section('content')


    <section id="slider">
        <div class="container">
            <div class="row head-slide">
                <div class="col-sm-4 col-xs-12 sm-hr">
                    <div class="row text-right block">
                        <div class="col-xs-9 ">
                            <h2>Безопасность</h2>
                            <p>Охранная, пожарная сигнализации, домофония, видеонаблюдения</p>
                        </div>
                        <div class="col-xs-3 ">
                            <img src="/img/fish-safe.png" alt="безопасность">
                        </div>
                    </div>
                    <hr>
                    <div class="row text-right block">
                        <div class="col-xs-9">
                            <h2>Мультимедийные системы</h2>
                            <p>интернет, телевидение, акустические системы, домашние кинотеатры</p>
                        </div>
                        <div class="col-xs-3 ">
                            <img src="/img/fish-media.png" alt="безопасность">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 hidden-xs">
                    <img src="/img/fish.png" alt="логотип">
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="row block">
                        <div class="col-xs-3">
                            <img src="/img/fish-web.png" alt="безопасность">
                        </div>
                        <div class="col-xs-9">
                            <h2>Наружные сети </h2>
                            <p>кабельные и воздушные линии, уличное и ландшафтное освещение, ремонт и реконструкция поселковых сетей</p>
                        </div>

                    </div>
                    <hr>
                    <div class="row block">
                        <div class="col-xs-3">
                            <img src="/img/fish-electro.png" alt="безопасность">
                        </div>
                        <div class="col-xs-9">
                            <h2>Электромонтаж</h2>
                            <p>освещение, электропроводка, заземление, молниезащита, организация бесперебойного питания</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row circles text-center">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="block">
                        <div class="img-circle"><p><b>20 лет</b><br> успешной<br> работы</p></div>
                        <div class="square">
                            <p> У нас 20­летний опыт в сфере устройства коммуникаций загородных домов. Мы  хорошо представляем, к чему приводят нарушения правил устройства электроустановок, ошибки в проектировании или монтаже! </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="block">
                        <div class="img-circle"><p>все<br> работы <b><br>под ключ</b></p></div>
                        <div class="square">
                            <p>
                                Мы команда специалистов, которые профессионально выполняют весь комплекс работ “от и до”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="block">
                        <div class="img-circle"><p><b>гарантия</b><br> качества<br> и сроков</p></div>
                        <div class="square">
                            <p>
                                Работаем только с сертифицированными материалами от официальных дилеров. После окончания работ заключается сервисный договор, все замены по нему в рамках гарантийных сроков осуществляются бесплатно.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="block">
                        <div class="img-circle"><p class=" text-center">комфорт<br> и безопасность <br><b>обеспечены</b></p></div>
                        <div class="square">
                            <p>
                                Используем только паянные соединения ­ это монтаж премиум­класса. Работы по объекту ведутся под надзором инженера по эксплуатации
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="we-service">
        <div class="container text-center">
            <h2>Мы обслуживаем:</h2>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <img src="/img/house.png" alt="Небольшие садовые домики">
                    <p>Небольшие садовые домики</p>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <img src="/img/house-kottage.png" alt="Пригородные коттеджи">
                    <p>Пригородные коттеджи</p>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <img src="/img/house-villa.png" alt="Большие загородные имения">
                    <p>Большие загородные имения</p>
                </div>
            </div>
        </div>
    </section>
    <section id="work-package">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Мы производим весь комплекс электромонтажных работ и монтаж всех сопутствующих коммуникаций:</h2>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <ul>
                                <li>интернет,</li>
                                <li>телевидение,</li>
                                <li>видеонаблюдение,</li>
                                <li>домофония,</li>
                                <li>акустические системы и домашние кинотеатры,</li>
                                <li>охранная и пожарная сигнализация.</li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <p>
                                Отдельно осуществляются <b>работы по организации резервного электроснабжения</b> всего объекта или части особо важных потребителей с помощью дизельных или бензиновых электрогенераторов либо источников бесперебойного питания.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 block-right">
                    <p>В электромонтаж входит <b>не только прокладка и коммутация</b> проводов внутри помещения с установкой розеток, выключателей и источников света,</p>
                    <p><b>но и все мероприятия по обеспечению безопасности дальнейшей эксплуатации электрооборудования ­</b> устройство контуров заземления, внутренних линий уравнения потенциалов, монтаж сетей молниезащиты, если этого требуют условия, а так же ввод питания в дом или квартиру от места присоединения, указанного в ваших технических условиях и монтаж необходимого количества электрощитов с аппаратурой защиты и управления.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="advantage">
        <div class="container">
            <h2 class="text-center">Наше преимущество:<br> <span>надежный рабочий процесс</span></h2>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <p class="txt-light">
                        Работы на объектах ведутся под наблюдением инженера по эксплуатации. </p>
                    <p>
                        В процессе работы составляется подробная исполнительная схема с обязательными привязками ­ размерами точного местонахождения скрытых коммуникаций
                    </p>
                </div>
                <div class="col-sm-4 hidden-xs">
                    <img src="/img/engene_qr.png" alt="инженер">
                </div>
                <div class="col-sm-4 col-xs-12">
                    <p>
                        <span class="txt-light">Выполнив работы в полном объеме мы не бросаем Заказчика</span>, а заключаем сервисный договор, проводим необходимые для безопасной эксплуатации регламентные работы ­ проверки, измерения, замену некорректно работающей защитной аппаратуры.
                        Если таковая будет выявлена в течении гарантийного срока фирмы­изготовителя, то ее <span class="txt-light">замена осуществляется бесплатно.</span>
                    </p>
                </div>
            </div>
            <div class="text-center">
                <a href="#" class="btn btn-yellow">Заказать звонок</a>
                <a href="#" class="btn btn-yellow">Оставить заявку</a>
            </div>
        </div>
    </section>
    <section id="scheme-work">
        <div class="container">
            <h2>Схема работы</h2>
            <div class="row">
                <div class="col-sm-1-5 col-xs-12">
                    <div class="ch-img">
                        <p class="img-circle">1</p>
                        <p>Оформление Вашего заказа</p>
                    </div>
                    <div class="ch-txt">
                        <p>Сделайте заказ, позвонив по телефону <br><a href="tel:+79096246404">8 909 624 64 04</a> или <a href="#contact">оставьте заявку на нашем сайте</a></p>
                    </div>
                </div>
                <div class="col-sm-1-5 col-xs-12">
                    <div class="ch-img">
                        <p class="img-circle">2</p>
                        <p>Коммерческое предложение</p>
                    </div>
                    <div class="ch-txt">
                        <p>Вы получите Коммерческое предложение в течение рабочего дня/p>
                    </div>
                </div>
                <div class="col-sm-1-5 col-xs-12">
                    <div class="ch-img">
                        <p class="img-circle">3</p>
                        <p>Заключение договора</p>
                    </div>
                    <div class="ch-txt">
                        <p>Мы заключим договор</p>
                    </div>
                </div>
                <div class="col-sm-1-5 col-xs-12">
                    <div class="ch-img">
                        <p class="img-circle">4</p>
                        <p>Выполнение работы</p>
                    </div>
                    <div class="ch-txt">
                        <p>В рамках договора и в срок мы выполняем всю работу</p>
                    </div>
                </div>
                <div class="col-sm-1-5 col-xs-12">
                    <div class="ch-img">
                        <p class="img-circle">5</p>
                        <p>Прием</p>
                    </div>
                    <div class="ch-txt">
                        <p>Вы принимаете объект и при желании заключаете сервисный договор.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="unique-offer">
        <div class="container">
            <h2>Уникальное предложение</h2>
            <div class="row">
                <div class="col-xs-12 col-sm-3 img">
                    {{ HTML::image('/img/proposal1.png', 'proposal') }}
                </div>
                <div class="col-xs-12 col-sm-3 img">
                    {{ HTML::image('/img/proposal2.png', 'proposal') }}
                </div>
                <div class="col-xs-12 col-sm-3 img">
                    {{ HTML::image('/img/proposal3.png', 'proposal') }}
                </div>
                <div class="col-xs-12 col-sm-3 img">
                    {{ HTML::image('/img/proposal4.png', 'proposal') }}
                </div>
            </div>
            <div class="row  white-block">
                <div class="col-xs-12 col-sm-3">
                    <div class="sale-red">
                        <p>Скидка<br> до 30% </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    На розетки, выключатели и другие электроустановачные изделия мировых брендов Гира, Юнг, БТчино, Мертен, Беркер и др. для заказчиков полного комплекта электромонтажных работ действует скидка до 30% от цены, рекомендованной их официальными представителями.
                    Заканные позиции регистрируются у оффициальных представителей по адресу вашего объекта и становятся на гарантию.
                </div>
                <div class="col-xs-12 col-sm-3 text-center">
                    {{ HTML::image('/img/baners/prop_logo01.png', 'proposal', ['class'=>'']) }}
                    {{ HTML::image('/img/baners/prop_2Gira.png', 'proposal', ['class'=>'']) }}
                    {{ HTML::image('/img/baners/prop_3Jung.png', 'proposal', ['class'=>'']) }}
                    {{ HTML::image('/img/baners/prop_4-BTic.png', 'proposal', ['class'=>'']) }}
                    {{ HTML::image('/img/baners/prop_05berker.png', 'proposal', ['class'=>'']) }}
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <h2>Свяжитесь с нами</h2>
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">

                    <form method="POST" action="/form-request"  role="form">

                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="inputName" class="sr-only">Имя</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="Ваше имя">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail" class="sr-only">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Ваш e-mail">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputPhohe" class="sr-only">Email address</label>
                                    <input type="phone" class="form-control" id="inputPhohe" placeholder="Ваш телефон">
                                  </div>
                                  <div class="form-group">
                                    <label for="inputQuestion" class="sr-only">Ваш вопрос</label>
                                    <input type="textarea" class="form-control" id="inputQuestion" placeholder="Ваш вопрос">
                                  </div>
                            </div>
                            <div class="col-sm-6 hidden-xs">
                                <p>По этому имени мы будем к Вам обращаться</p>
                                <br>
                                <p>Мы свяжемяся с вами по телефону или электронной почте</p>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <button type="submit" class="btn btn-default">Оставить заявку</button>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <p>Или просто позвоните нам по телефону <br> <a href="">+7 909 6246404</a></p>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>



@stop

@section('scripts')

@stop
