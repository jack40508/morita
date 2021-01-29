<!-- Modal -->
<div class="modal fade" id="cancelModal{{ $reserve_bannerimage->pivot->id }}" tabindex="-1" aria-labelledby="cancelreservebannerimageLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="cancelModal{{ $reserve_bannerimage->pivot->id }}Label">本当にいいですか？</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>予定をキャンセルしますか？</p>
            </div>
            <div class="modal-footer">
                {!! Form::open(['url'=>'backside/page/'.$page->id.'/deletereserve/'.$reserve_bannerimage->pivot->id,'method'=>'DELETE']) !!}
                {!! Form::hidden('is_sell', false) !!}
                {!! Form::submit('キャンセル',['class'=>'btn btn-danger mt-1 mt-md-0 w-100']) !!}
                {!! Form::close() !!}
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>