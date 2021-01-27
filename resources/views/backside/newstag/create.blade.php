@extends('backside.layouts.app')

@section('content')
    <h1 class="mb-3">新規タグ</h1>
    {{ Form::open(['url'=>'/backside/newstag', 'method'=>'post']) }}
        <div class="form-group row">
            {!! Form::label('タグ名：',"",['class'=>'col-md-2 text-md-right']) !!}
            {!! Form::text('name',"",['class'=>'form-control col-md-8','required']) !!}
        </div>

        <div class="form-group row justify-content-md-center">
          {!! Form::submit('送信',['class'=>'btn btn-primary form-control col-md-4']) !!}
          <a href="{{ URL::previous() }}" class="btn btn-secondary col-md-2 offset-md-1 mt-3 mt-md-0" role="button" aria-pressed="true">キャンセル</a>
        </div>
    {!! Form::close() !!}
@endsection
