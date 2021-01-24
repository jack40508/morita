<!-- Modal -->
<div class="modal fade" id="sellDateUpdateModal{{ $product->id }}" tabindex="-1" aria-labelledby="deleteProductLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Form::open(['url'=>'backside/product/update_selldate/'.$product->id,'method'=>'PUT']) !!}
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="sellDateUpdateModal{{ $product->id }}Label">限定商品「{{ $product->name }}」の販売期間を変更しますか？</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>限定商品「{{ $product->name }}」の販売期間を設定してください</p>
                    <div class="row justify-content-around">
                        {!! Form::date('date_start', $product->selldate, ['class'=>'form-control col-md-5 col-10', 'id'=>'date-start']) !!}
                        <div class="col-md-1 col-2 text-center d-md-block d-none">～</div>
                        {!! Form::date('date_end', $product->soldoutdate, ['class'=>'form-control col-md-5 col-10 mt-1 mt-md-0', 'id'=>'date-end']) !!}
                    </div>
                </div>
                <div class="modal-footer">
                    {!! Form::submit('更新', ['class'=>'btn btn-warning']) !!}
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>