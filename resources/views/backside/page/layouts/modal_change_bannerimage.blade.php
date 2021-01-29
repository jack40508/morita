<!-- Modal -->
<div class="modal fade text-left" id="changeModal{{ $page->id }}" tabindex="-1" aria-labelledby="changebannerLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::open(['url'=>'backside/page/changebanner/'.$page->id,'method'=>'PUT', 'files' => true]) !!}
            <div class="modal-header bg-warning">
                <h5 class="modal-title" id="changeModal{{ $page->id }}Label">画像を選択してください</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-12">
                        {!! Form::radio('select_date', 0, true, ['id'=>'date_general'.$page->id]) !!}
                        {!! Form::label('一般', "") !!}
                        {!! Form::radio('select_date', 1, false, ['class'=>'ml-3', 'id'=>'date_reserve'.$page->id]) !!}
                        {!! Form::label('予約変更', "") !!}
                        {!! Form::radio('select_date', 2, false, ['class'=>'ml-3', 'id'=>'date_limit'.$page->id]) !!}
                        {!! Form::label('期間限定', "") !!}
                    </div>
                    <div class="col-12">
                        <div class="row justify-content-around">
                            {!! Form::date('date_start', "", ['class'=>'form-control col-5', 'id'=>'dateStart'.$page->id, 'min'=>date('Y-m-d'), 'disabled']) !!}
                            <div class="col-1 text-center">～</div>
                            {!! Form::date('date_end', "", ['class'=>'form-control col-5', 'id'=>'dateEnd'.$page->id, 'min'=>date('Y-m-d'), 'disabled']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    {!! Form::label('画像追加：',"",['class'=>'col-md-12', 'for'=>'newBannerimage']) !!}
                    {!! Form::file('new_bannerimage',['class'=>'col-md-12']) !!}
                </div>
                <hr>
                <div class="form-group row" style="height:50vh; overflow-y: scroll;">
                    @include('backside.page.layouts.selete_image')
                </div>
            </div>
            <div class="modal-footer">
                {!! Form::submit('変更',['class'=>'btn btn-warning mt-1 mt-md-0']) !!}
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
