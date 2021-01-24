<!-- Modal -->
<div class="modal fade" id="deleteModal{{ $productkategorie->id }}" tabindex="-1" aria-labelledby="deleteproductkategorieLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteModal{{ $productkategorie->id }}Label">本当にいいですか？</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>カテゴリー「{{ $productkategorie->name }}」を削除しますか？（所属商品のカテゴリーは未選択になります）</p>    
            </div>
            <div class="modal-footer">
                {!! Form::open(['url'=>'backside/productkategorie/'.$productkategorie->id,'method'=>'DELETE']) !!}
                {!! Form::hidden('is_sell', false) !!}
                {!! Form::submit('削除',['class'=>'btn btn-danger mt-1 mt-md-0 w-100']) !!}
                {!! Form::close() !!}
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>