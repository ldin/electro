@extends('admin.layout')

@section('sidebar')
    @include('admin.post-menu')
@stop

@section('content')
    <h2>Редактировать тарифы</h2>

    <h3>Интернет</h3>

    {{ Form::open(array('url' => 'admin/post-rate-inet/', 'class' => 'form-group col-xs-12')) }}

        <div class="row">
            @if(isset($row['inet'])&&count($row['inet'])>0)
                <table class="table table-bordered">
                    @foreach($row['inet'] as $row_key=>$rateInet_row)
                        <tr class="{{($row_key==0)?'info':''}}">
                            @if($row_key==0)
                                <td></td>
                            @endif
                            @foreach($rateInet_row as $el_key=>$rateInet_el)
                                @if($row_key==0 || $el_key==0)
                                    <th class="info">{{ Form::text('rateInet['.$row_key.'][]', $rateInet_el, array('class' => 'form-control col-xs-12')); }}</th>
                                @else
                                    <td>{{ Form::text('rateInet['.$row_key.'][]', $rateInet_el, array('class' => 'form-control col-xs-12')); }}</td>

                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </table><br /><br />
            @else
                <table class="table table-bordered">
                    <tr class="info">
                        <td></td>
                        <th><input type="text" class="col-xs-12 form-control" value="12 месяцев" name="rateInet[0][]"/></th>
                        <th><input type="text" class="col-xs-12 form-control" value="6 месяцев" name="rateInet[0][]"/></th>
                        <th><input type="text" class="col-xs-12 form-control" value="1 месяц" name="rateInet[0][]"  /></th>
                    </tr>
                    <tr>
                        <th class="info"><input type="text" name="rateInet[1][]" class="col-xs-12 form-control" value="30 Mbit" /></th>
                        <td><input name="rateInet[1][]" type="text" class="col-xs-12 form-control"/></td>
                        <td><input name="rateInet[1][]" type="text" class="col-xs-12 form-control"/></td>
                        <td><input name="rateInet[1][]" type="text" class="col-xs-12 form-control"/></td>
                    </tr>
                    <tr>
                        <th class="info"><input type="text" name="rateInet[2][]" class="col-xs-12 form-control" value="50 Mbit" /></th>
                        <td><input name="rateInet[2][]" type="text" class="col-xs-12 form-control"/></td>
                        <td><input name="rateInet[2][]" type="text" class="col-xs-12 form-control"/></td>
                        <td><input name="rateInet[2][]" type="text" class="col-xs-12 form-control"/></td>
                    </tr>
                    <tr>
                        <th class="info"><input type="text" name="rateInet[3][]" class="col-xs-12 form-control" value="100 Mbit" /></th>
                        <td><input name="rateInet[3][]" type="text" class="col-xs-12 form-control"/></td>
                        <td><input name="rateInet[3][]" type="text" class="col-xs-12 form-control"/></td>
                        <td><input name="rateInet[3][]" type="text" class="col-xs-12 form-control"/></td>
                    </tr>
                </table><br />
            @endif
        </div>

        <div class="row">
            <label>Дополнительные опции (флажки):</label><br><br>

            <table id="inetOption" class="table table-bordered">
                <tr class="info"> <th></th><th class="col-xs-1">цена</th><th class="col-xs-5">название</th><th class="col-xs-6">описание</th><th></th></tr>

                @if(isset($row['inetOption'])&&count($row['inetOption'])>0)
                    @foreach($row['inetOption'] as $row_key=>$check)
                        <tr class="ui-state-default {{!empty($check->status)?'':'implicit'}}" data-id="{{$check->id}}" data-num="{{$row_key}}">
                            <td>{{ Form::hidden('inetOption['.$row_key.'][id]', $check->id, array('class' => 'form-control col-xs-12')); }}<i class="glyphicon glyphicon-resize-vertical"></i></td>
                            <td>{{ Form::text('inetOption['.$row_key.'][price]', $check->price, array('class' => 'form-control col-xs-12')); }}</td>
                            <td>{{ Form::text('inetOption['.$row_key.'][name]', $check->name, array('class' => 'form-control col-xs-12')); }}</td>
                            <td>{{ Form::text('inetOption['.$row_key.'][description]', $check->description, array('class' => 'form-control col-xs-12')); }}</td>
                            <td><i class="glyphicon glyphicon-ban-circle js-implicit" ></i><i class="glyphicon glyphicon-remove js-remove"></i></td>
                        </tr>
                    @endforeach
                @else
                    <tr data-num="0">
                        <td><input type="hidden" name="inetOption[0][id]" value="0" /><i class="glyphicon glyphicon-resize-vertical"></i></td>
                        <td class="info"><input type="text" name="inetOption[0][price]" class="col-xs-12 form-control"/></td>
                        <td><input type="text" name="inetOption[0][name]" class="col-xs-12 form-control"/></td>
                        <td><textarea name="inetOption[0][description]" class="col-xs-12 form-control" rows=1></textarea></td>
                        <td><i class="glyphicon glyphicon-ban-circle js-implicit"></i><i class="glyphicon glyphicon-remove js-remove"></i></td>
                    </tr>
                @endif

            </table>
            <a id="add-inetOption" class="btn btn-default"><i class="glyphicon glyphicon-plus"></i> Добавить строку</a>
        </div>
        <br>
        <div class="row">
            {{ Form::label('', '') . Form::submit('Сохранить', array( 'class' => 'btn btn-inverse')) }}
        </div>

{{ Form::close() }}


@stop
