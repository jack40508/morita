<!-- Modal -->
<div class="modal fade" id="isSellUpdateModal{{ $product->id }}" tabindex="-1" aria-labelledby="deleteProductLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="isSellUpdateModal{{ $product->id }}Label">本当にいいですか？</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>商品「{{ $product->name }}」を販売発売にしますか？</p>
            </div>
            <div class="modal-footer">
                {!! Form::open(['url'=>'backside/product/update_issell/'.$product->id,'method'=>'PUT']) !!}
                {!! Form::hidden('is_sell', true) !!}
                {!! Form::hidden('from', $from) !!}
                {!! Form::submit('発売', ['class'=>'btn btn-primary mt-1 mt-md-0 w-100']) !!}
                {!! Form::close() !!}
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>