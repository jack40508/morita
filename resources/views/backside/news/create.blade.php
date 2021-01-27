@extends('backside.layouts.app')

@section('content')
    <h1 class="mb-3">新規お知らせ</h1>
    {{ Form::open(['url'=>'/backside/news', 'method'=>'post', 'files' => true]) }}
        <div class="form-group row">
            {!! Form::label('タイトル：',"",['class'=>'col-md-2 text-md-right']) !!}
            {!! Form::text('title', "", ['class'=>'form-control col-md-8','required']) !!}
        </div>

        <div class="form-group row">
            {!! Form::label('タグ：', "", ['class'=>'col-md-2 text-md-right']) !!}
            <div class="col-md-8">
                <div class="row">
                    @foreach($newstags as $newstag)
                        <div class="col-md-3">
                            {!! Form::checkbox('newstags[]', $newstag->id, false, ['class'=>'mr-1']) !!}{{ $newstag->name }}
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {!! Form::checkbox('newstags[]', 0, false, ['class'=>'mr-1', 'id'=>'check_newtag']) !!}その他
                        {!! Form::text('text_newtag', "", ['class'=>'form-control', 'id'=>'text_newtag', 'placeholder'=>'#で分けてください、例)#タグ1#タグ2', 'disabled']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2 text-md-right">
                {!! Form::checkbox('check_uploaddatetime', true, false, ['id'=>'check_uploaddatetime']) !!}
                {!! Form::label('アップロード予約：', "") !!}
            </div>
            {!! Form::input('dateTime-local','datetime_uploadat', "", ['class'=>'form-control col-md-8 col-12', 'id'=>'datetime-uploaddatetime', 'disabled']) !!}
        </div>
        <div class="form-group row">
            {!! Form::label('内容：',"",['class'=>'col-md-2 text-md-right']) !!}
            {!! Form::textarea('content', null, ['class'=>'form-control col-md-8','required']) !!}
        </div>
        <div class="form-group row">
		    {!! Form::label('画像追加：',"",['class'=>'col-md-2 text-md-right']) !!}
            {!! Form::file('news_imgs[]', ['multiple'=>'multiple']) !!}
		</div>
        <div class="form-group row justify-content-md-center">
            {!! Form::submit('送信',['class'=>'btn btn-primary form-control col-md-4']) !!}
            <a href="{{ URL::previous() }}" class="btn btn-secondary col-md-2 offset-md-1 mt-3 mt-md-0" role="button" aria-pressed="true">キャンセル</a>
        </div>
    {!! Form::close() !!}

    <script>
        var newsimageID = new Array();
    </script>
    <script src="{{ asset('/js/backside/news-create-edit.js') }}"></script>
@endsection