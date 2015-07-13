@extends('admin.layout')

@section('sidebar')
    @include('admin.post-menu')
@stop

@section('content')

    <h2>Редактирование тарифа TV</h2>


{{ Form::open(array('url' => 'admin/edit-item-tv/'.(isset($row->name)?$row->id:''), 'class' => 'form-group col-xs-12')) }}
    <div class="form-group {{ ($errors->first('name')) ? 'has-error' : '' }}">
        {{ Form::label('inputName', 'Название*') }}
        {{ Form::text('name', (isset($row->name)?$row->name:''), array('class'=>'form-control', 'id'=>'inputName')); }}
    </div>
    <div class="form-group">
        {{ Form::label('inputSubject', 'Тема', array('class'=>'control-label')) }}
        {{ Form::text('subject', (isset($row->subject)?$row->subject:''), array('class' => 'form-control', 'id'=>'inputSubject')); }}
    </div>
    <div class="form-group">
        {{ Form::label('inputprice', 'Стоимость', array('class'=>'control-label')) }}
        {{ Form::text('price', (isset($row->price)?$row->price:''), array('class' => 'form-control', 'id'=>'inputprice')); }}
    </div>
    <div class="form-group">
        {{ Form::label('inputText', 'Описание') }}
        {{Form::textarea('description', (isset($row->description)?$row->description:''), array('class' => 'form-control ', 'id'=>'inputText')); }}
    </div>

    {{ Form::label('', '') . Form::submit('Сохранить', array( 'class' => 'btn btn-inverse')) }}
    <a href="/admin/post-rate-tv" class="btn btn-default">Отмена</a>


{{ Form::close() }}


<script type="text/javascript" >
    $(document).ready(function() {
        var ckeditorText = CKEDITOR.replace( 'inputText' );
        AjexFileManager.init({returnTo: 'ckeditor', editor: ckeditorText});

        var ckeditorPreview = CKEDITOR.replace( 'inputPreview', {
         toolbarGroups: [
                {"name":"basicstyles","groups":["basicstyles"]},
                {"name":"links","groups":["links"]},
                {"name":"paragraph","groups":["list","blocks"]},
                {"name":"document","groups":["mode"]},
                {"name":"insert","groups":["insert"]},
                {"name":"styles","groups":["styles"]}
            ],
            removeButtons: 'Strike,Subscript,Superscript,Anchor,Styles,Specialchar'
            });

    });

</script>

@stop


