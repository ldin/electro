    <div id="connection_test">
        <div class="container block">
            <div class="">
                <h2 class="text-center">Проверка возможности подключения</h2>

                <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">

                {{ Form::open(array('url' => '/connect', 'class' => 'form-group', 'onsubmit'=>'return false')) }}

                    <div class="col-xs-12">
                        <p class="title">Для проверки возможности подключения<br> вашей квартиры к сети Тиера, заполните форму:</p>
                        <div class=" row">
                            <div class="form-group col-sm-8 col-xs-12">
                                <label>Ваша улица</label>
                                {{ Form::text('street', '', ['id' =>  'q_street', 'class'=>"form-control"])}}
                            </div>

                            <div class="form-group col-sm-4 col-xs-12">
                                <label>Дом №</label>
                                {{ Form::text('house', '', ['id' => 'q_house', 'class'=>"form-control",  "disabled"=>"disabled"])}}
                                <p id="check-house">Проверить</p>
                            </div>

                        </div>
                        <div class="row">
                            <div id="answer-block">
                                <div class="col-xs-12">
                                    <div id="answer" class="alert">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group ">
                                        {{ Form::label('inputName', 'ФИО') }}
                                        {{ Form::text('name', '', ['class'=>"form-control", 'id'=>'inputName'])}}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('inputPhone', 'Телефон') }}
                                        {{ Form::text('phone', '', ['class'=>"form-control", 'id'=>'inputPhone'])}}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('inputEmail', 'Емайл') }}
                                        {{ Form::text('email', '', ['class'=>"form-control", 'id'=>'inputEmail'])}}
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <input type="submit" value="Отправить заявку" class="btn-main">
                                </div>
                            </div> {{-- /#answer --}}
                        </div>
                    </div>

                    <div class="clear"></div>
                {{ Form::close() }}
                </div>

            </div> <!-- ./ -->
        </div> <!-- ./container -->
    </div>


