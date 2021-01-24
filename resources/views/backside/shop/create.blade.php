@extends('backside.layouts.app')

@section('content')
    <h1 class="mb-3">新規店舗</h1>
    {{ Form::open(['url'=>'/backside/shop', 'method'=>'post']) }}
        <div class="form-group row">
            {!! Form::label('店舗名：', "", ['class'=>'col-md-2 text-md-right']) !!}
            {!! Form::text('name', "", ['class'=>'form-control col-md-8', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('住所：', "", ['class'=>'col-md-2 text-md-right']) !!}
            {!! Form::text('address', "", ['class'=>'form-control col-md-8', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('メールアドレス：', "", ['class'=>'col-md-2 text-md-right']) !!}
            {!! Form::text('mail', "", ['class'=>'form-control col-md-8', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('電話：', "", ['class'=>'col-md-2 text-md-right']) !!}
            {!! Form::text('phone', "", ['class'=>'form-control col-md-8', 'required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('営業時間：', "", ['class'=>'col-md-2 text-md-right']) !!}
            {!! Form::time('opentime', "", ['class'=>'form-control col-md-3', 'required']) !!}
            <div class="col-md-2 text-center">
                <p>～</p>
            </div>
            {!! Form::time('closetime', "", ['class'=>'form-control col-md-3', 'required']) !!}
        </div>


        <div class="form-group row">
            {!! Form::label('定休日：', "", ['class'=>'col-md-2 text-md-right']) !!}
            <div class="col-md-8">
                <div class="row">
                    @foreach($dayoffs as $dayoff)
                        <div class="col-md-3">
                            {!! Form::checkbox('dayoffs[]', $dayoff->id, false, ['class'=>'mr-1', 'autocomplete'=>'gender']) !!}{{ $dayoff->name }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('店舗種類：', "", ['class'=>'col-md-2 text-md-right']) !!}
            {!! Form::select('shoptype', $shoptypes, "", ['class'=>'form-control col-md-8','required']) !!}
        </div>

        <div class="form-group row">
          {!! Form::label('紹介：', "", ['class'=>'col-md-2 text-md-right']) !!}
          {!! Form::textarea('about', null, ['class'=>'form-control col-md-8','required']) !!}
        </div>

        <div class="form-group row justify-content-md-center">
          {!! Form::submit('送信', ['class'=>'btn btn-primary form-control col-md-4']) !!}
          <a href="{{ URL::previous() }}" class="btn btn-secondary col-md-2 offset-md-1" role="button" aria-pressed="true">キャンセル</a>
        </div>
    {!! Form::close() !!}
@endsection
