
@extends('backside.layouts.app')

@section('content')
    <h1>お知らせ編集</h1>
    <div class="row justify-content-md-end mb-3">
        <div class="col-4 col-md-2 mb-3">
            @php
                $from = "edit"
            @endphp

            @if($news->permission)
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger mt-1 mt-md-0 w-100" data-toggle="modal" data-target="#closeModal{{ $news->id }}">
                    隠れる
                </button>
                <!-- Modal -->
                @include('backside.news.layouts.modal_close_check')
            @else
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mt-1 mt-md-0 w-100" data-toggle="modal" data-target="#openModal{{ $news->id }}">
                    公開
                </button>
                <!-- Modal -->
                @include('backside.news.layouts.modal_open_check')
            @endif
        </div>
    </div>
    {{ Form::open(['url'=>'/backside/news/'.$news->id, 'method'=>'put', 'files' => true]) }}
        <div class="form-group row">
            {!! Form::label('タイトル：',"",['class'=>'col-md-2 text-md-right']) !!}
            {!! Form::text('title', $news->title, ['class'=>'form-control col-md-8','required']) !!}
        </div>
        <div class="form-group row">
            {!! Form::label('カテゴリー：', "", ['class'=>'col-md-2 text-md-right']) !!}
            {!! Form::select('newskategorie', $newskategories, $news->newskategorie_id, ['class'=>'form-control col-md-8', 'placeholder'=>'カテゴリーを選択してください', 'required'] ) !!}
        </div>
        <div class="form-group row">
            {!! Form::label('タグ：', "", ['class'=>'col-md-2 text-md-right']) !!}
            <div class="col-md-8">
                <div class="row">
                    @foreach($newstags as $newstag)
                        <div class="col-md-3">
                            {!! Form::checkbox('newstags[]', $newstag->id, false, ['class'=>'mr-1', 'id'=>'checkNewstag'.$newstag->id]) !!}{{ $newstag->name }}
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
                @if(strtotime(date('Y/m/d H:i:s')) < strtotime($news->upload_at))
                    {!! Form::checkbox('check_uploaddatetime', true, true, ['id'=>'check_uploaddatetime']) !!}
                @else
                    {!! Form::checkbox('check_uploaddatetime', true, false, ['id'=>'check_uploaddatetime']) !!}
                @endif
                {!! Form::label('アップロード予約：', "") !!}
            </div>
            @if(strtotime(date('Y/m/d H:i:s')) < strtotime($news->upload_at))
                {!! Form::input('dateTime-local','datetime_uploadat', $news->upload_at, ['class'=>'form-control col-md-8 col-12', 'id'=>'datetime-uploaddatetime']) !!}
            @else
                {!! Form::input('dateTime-local','datetime_uploadat', "", ['class'=>'form-control col-md-8 col-12', 'id'=>'datetime-uploaddatetime', 'disabled']) !!}
            @endif
        </div>
        <div class="form-group row">
            {!! Form::label('内容：',"",['class'=>'col-md-2 text-md-right']) !!}
            {!! Form::textarea('content', $news->content, ['class'=>'form-control col-md-8','required']) !!}
        </div>
        <div class="form-group row">
		    {!! Form::label('画像：',"",['class'=>'col-md-2 text-md-right']) !!}
            <div class="col-md-8">
                <div class="row">
                    <script>
                        var newsimageIDs = new Array();
                    </script>
                    @foreach($news->newsimages as $key => $newsimage)
                        <div class="col-6 col-md-3 text-right div-news-original-img" id="divNewsOriginalImg{{ $newsimage->id }}">
                            <script>
                                newsimageIDs[{{ $key }}] = {{ $newsimage->id }};
                            </script>
                            <button class="btn-delete-img btn-danger" type="button" id="btnNewsOriginalImg{{ $newsimage->id }}">X</button>
                            {!! Form::hidden('news_original_imgs[]', $newsimage->id, ['id'=>'newsOriginalImg'.$newsimage->id]) !!}
                            <img src="/img/news/news_{{ $news->id }}_{{ $newsimage->id }}.jpg" onerror="this.style.display='none'" alt="img-news" class="img-news mr-md-3 mb-3">
                        </div>
                    @endforeach
                </div>
            </div>
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
        var checkedNewstags = new Array();
    </script>
    @foreach($news->newstags as $key => $newstag)
    <script>
        checkedNewstags[{{ $key }}] = {{ $newstag->id }};
    </script>
    @endforeach
    <script src="{{ asset('/js/backside/news-create-edit.js') }}"></script>
@endsection