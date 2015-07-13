@extends('admin.layout')

@section('sidebar')
    @include('admin.post-menu')
@stop

@section('content')

    <h2>Редактировать тарифы</h2>

    <h3>TV</h3>

{{ Form::open(array('url' => 'admin/post-rate-tv/', 'class' => 'form-group col-xs-12')) }}

    <table id="rateTV" class="table table-bordered">
        <tr class="info"><th class="col-xs-1"></th><th class="col-xs-3">название</th><th class="col-xs-3">тема</th><th class="col-xs-2">цена</th><th class="col-xs-1"></th><th class="col-xs-1"></th><th class="col-xs-1"></th></tr>

        @if(isset($row)&&count($row)>0)

            @foreach($row as $row_key=>$elem_tv)

            <tr class="ui-state-default {{!empty($elem_tv->status)?'':'implicit'}}" data-id="{{$elem_tv->id}}" data-num="{{$row_key}}">
                <td>{{ Form::hidden('tv['.$row_key.'][id]', $elem_tv->id, array('class' => 'form-control col-xs-12')); }}<i class="glyphicon glyphicon-resize-vertical"></i></td>
                <td><p>{{ $elem_tv->name }}</p></td>
                <td><p>{{ $elem_tv->subject }}</p></td>
                <td><p>{{ $elem_tv->price }}</p></td>
                <td><i class="glyphicon glyphicon-ban-circle js-implicit-tv" ></i></td>
                <td><a href="/admin/edit-item-tv/{{$elem_tv->id}}" class="glyphicon glyphicon-pencil"></a></td>
                <td><a class="glyphicon glyphicon-remove js-remove-tv"></a></td>
            </tr>

            @endforeach

        @endif

    </table>

    <a href="/admin/edit-item-tv" id="add-rateTV" class="btn btn-default"><i class="glyphicon glyphicon-plus"></i> Добавить строку</a>
    <br /><br />


    {{ Form::label('', '') . Form::submit('Сохранить', array( 'class' => 'btn btn-inverse')) }}

{{ Form::close() }}


@stop
