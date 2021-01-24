@extends('backside.layouts.app')

@section('content')
    <h1 class="mb-3">商品追加</h1>
    {{ Form::open(['url'=>'/backside/product', 'method'=>'post', 'files' => true]) }}
        <div class="form-group row">
            {!! Form::label('商品名：', "", ['class'=>'col-md-2 text-md-right']) !!}
            {!! Form::text('name', "", ['class'=>'form-control col-md-8', 'required']) !!}
        </div>
        <div class="form-group row">
            {!! Form::label('カテゴリー：', "", ['class'=>'col-md-2 text-md-right']) !!}
            {!! Form::select('productkategories', $productkategories, null, ['class'=>'form-control col-md-8', 'placeholder'=>'カテゴリーを選択してください', 'required'] ) !!}
        </div>
        <div id="div-sizeprice">
            <div class="form-group row" id="div-sizeprice1">
                {!! Form::label('サイズ/価格：', "", ['class'=>'col-md-2 text-md-right']) !!}
                {!! Form::text('size[]', "", ['class'=>'form-control col-md-2 col-4', 'required']) !!}
                {!! Form::text('price[]', "", ['class'=>'form-control col-md-2 col-4 offset-md-1 offset-1', 'required']) !!}
                <button class="btn btn-success col-md-2 offset-1 col-2" type="button" id="btn-add-sizeprice">追加</button>     
            </div>
        </div> 
        <div class="form-group row">
            <div class="col-md-2 text-md-right">
                {!! Form::checkbox('limit', true, false, ['id'=>'limit-check']) !!}
                {!! Form::label('期間限定：', "") !!}
            </div>            
            {!! Form::date('date_start', "", ['class'=>'form-control col-md-2 col-4', 'id'=>'date-start']) !!}
            <div class="col-md-1 col-2 text-center">～</div>
            {!! Form::date('date_end', "", ['class'=>'form-control col-md-2 col-4', 'id'=>'date-end', 'disabled']) !!}
        </div>
        <div class="form-group row">
		    {!! Form::label('商品画像：',"",['class'=>'col-md-2 text-md-right']) !!}
            {!! Form::file('product_img', ['required']) !!}
		</div>
        <div class="form-group row justify-content-md-center">
          {!! Form::submit('送信', ['class'=>'btn btn-primary form-control col-md-4 col-6']) !!}
          <a href="{{ URL::previous() }}" class="btn btn-secondary col-md-2 offset-md-1 offset-2 col-4" role="button" aria-pressed="true">キャンセル</a>
        </div>
    {!! Form::close() !!}

    <script>
        var sizeprice_id = 1;
    </script>
    <script src="{{ asset('/js/backside/product-create.js') }}"></script>
@endsection
