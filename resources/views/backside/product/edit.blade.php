@extends('backside.layouts.app')

@section('content')
    <h1>商品編集</h1>
    <div class="row justify-content-md-end mb-3">
        <div class="col-4 col-md-2">
            @if($product->is_sell)
                <!-- Button trigger modal -->
                
                <button type="button" class="btn btn-danger mt-1 mt-md-0 w-100" data-toggle="modal" data-target="#isSellUpdateModal{{ $product->id }}">
                    販売中止
                </button>

                <!-- Modal -->
                @include('backside.product.layouts.modal_stop_sell')
            @else
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mt-1 mt-md-0 w-100" data-toggle="modal" data-target="#isSellUpdateModal{{ $product->id }}">
                    販売開始
                </button>

                <!-- Modal -->
                @include('backside.product.layouts.modal_start_sell')
            @endif
        </div>
    </div>


    {{ Form::open(['url'=>'/backside/product/'.$product->id, 'method'=>'put', 'files' => true]) }}
        <div class="form-group row">
            {!! Form::label('商品名：', "", ['class'=>'col-md-2 text-md-right']) !!}
            {!! Form::text('name', $product->name, ['class'=>'form-control col-md-8', 'required']) !!}
        </div>
        <div class="form-group row">
            {!! Form::label('カテゴリー：', "", ['class'=>'col-md-2 text-md-right']) !!}
            {!! Form::select('productkategories', $productkategories, $product->productkategorie_id, ['class'=>'form-control col-md-8', 'placeholder'=>'カテゴリーを選択してください', 'required'] ) !!}
        </div>
        <div id="div-sizeprice">
            @foreach($product->productsizes as $key => $productsize)
                @if($key == 0)
                    <div class="form-group row" id="div-sizeprice{{ $key+1 }}">
                        {!! Form::label('サイズ/価格：', "", ['class'=>'col-md-2 text-md-right']) !!}
                        {!! Form::text('size[]', $productsize->size, ['class'=>'form-control col-md-2 col-4', 'required']) !!}
                        {!! Form::text('price[]', $productsize->price, ['class'=>'form-control col-md-2 col-4 offset-md-1 offset-1', 'required']) !!}
                        <button class="btn btn-success col-md-2 offset-1 col-2" type="button" id="btn-add-sizeprice">追加</button>     
                    </div>
                @else
                    <div class="form-group row" id="div-sizeprice{{ $key+1 }}">
                        {!! Form::text('size[]', $productsize->size, ['class'=>'form-control col-md-2 col-4 offset-md-2', 'required']) !!}
                        {!! Form::text('price[]', $productsize->price, ['class'=>'form-control col-md-2 col-4 offset-md-1 offset-1', 'required']) !!}
                        <button class="btn btn-danger col-md-2 offset-1 col-2" type="button" id="btn-delete-sizeprice{{ $key+1 }}">削除</button>     
                    </div>
                @endif
            @endforeach            
        </div> 
        <div class="form-group row">
            @if($product->selldate != '1920-01-01' && $product->soldoutdate != '2119-12-31')
                <div class="col-md-2 text-md-right">
                    {!! Form::checkbox('limit', true, true, ['id'=>'limit-check']) !!}
                    {!! Form::label('期間限定：', "") !!}
                </div>            
                {!! Form::date('date_start', $product->selldate, ['class'=>'form-control col-md-2 col-4', 'id'=>'date-start']) !!}
                <div class="col-md-1 col-2 text-center">～</div>
                {!! Form::date('date_end', $product->soldoutdate, ['class'=>'form-control col-md-2 col-4', 'id'=>'date-end']) !!}
            @else
                <div class="col-md-2 text-md-right">
                    {!! Form::checkbox('limit', true, false, ['id'=>'limit-check']) !!}
                    {!! Form::label('期間限定：', "") !!}
                </div>            
                {!! Form::date('date_start', $product->selldate, ['class'=>'form-control col-md-2 col-4', 'id'=>'date-start']) !!}
                <div class="col-md-1 col-2 text-center">～</div>
                {!! Form::date('date_end', "", ['class'=>'form-control col-md-2 col-4', 'id'=>'date-end', 'disabled']) !!}
            @endif
        </div>
        <div class="form-group row">
            {!! Form::label('商品画像：',"",['class'=>'col-md-2 text-md-right']) !!}
            <img src="/img/product/product_{{ $product->id }}.jpg" alt="product_img" class="product_img">
        </div>
        <div class="form-group row">
		    {!! Form::label('商品画像変更：',"",['class'=>'col-md-2 text-md-right']) !!}
            {!! Form::file('product_img') !!}
		</div>
        <div class="form-group row justify-content-md-center">
          {!! Form::submit('送信', ['class'=>'btn btn-primary form-control col-md-4 col-6']) !!}
          <a href="{{ URL::previous() }}" class="btn btn-secondary col-md-2 offset-md-1 offset-2 col-4" role="button" aria-pressed="true">キャンセル</a>

        </div>
    {!! Form::close() !!}

    <script>
        var sizeprice_id = {{ count($product->productsizes) }};
    </script>
    <script src="{{ asset('/js/backside/product.js') }}"></script>
@endsection
