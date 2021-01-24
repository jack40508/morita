<!-- Modal -->
<div class="modal fade text-left" id="productsearchModal" tabindex="-1" role="dialog" aria-labelledby="productsearchModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['url'=>'backside/product/search','method'=>'GET']) !!}
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="productsearchModalLabel">商品検索</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::text('name', "", ['class'=>'form-control', 'placeholder'=>'商品名を入力してください', 'id'=>'search_name']) !!}
                    {!! Form::label('カテゴリーを選択してください', "", ['class'=>'mt-3 mb-1']) !!}
                    <div class="row ml-1">
                        @foreach($productkategories as $productkategorie)
                            <div class="col-6">
                                {!! Form::checkbox('check_productkategories[]', $productkategorie->id, false, ['id'=>'check_productkategories'.$productkategorie->id]) !!}
                                {{$productkategorie->name}}
                            </div>
                        @endforeach
                    </div>
                    {!! Form::label('商品状態を選択してください', "", ['class'=>'mt-3 mb-1']) !!}
                    <div class="row ml-1">
                        <div class="col-6">
                            {!! Form::checkbox('check_status[]', 1, false, ['id'=>'check_status1']) !!}
                            通常販売
                        </div>
                        <div class="col-6">
                            {!! Form::checkbox('check_status[]', 2, false, ['id'=>'check_status2']) !!}
                            期間限定
                        </div>
                        <div class="col-6">
                            {!! Form::checkbox('check_status[]', 3, false, ['id'=>'check_status3']) !!}
                            開催日待ち
                        </div>
                        <div class="col-6">
                            {!! Form::checkbox('check_status[]', 4, false, ['id'=>'check_status4']) !!}
                            販売中止
                        </div>
                        <div class="col-6">
                            {!! Form::checkbox('check_status[]', 5, false, ['id'=>'check_status5']) !!}
                            期間終了
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">検索</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>