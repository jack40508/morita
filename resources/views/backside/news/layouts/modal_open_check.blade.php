<!-- Modal -->
<div class="modal fade" id="openModal{{ $news->id }}" tabindex="-1" aria-labelledby="opennewsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="openModal{{ $news->id }}Label">本当にいいですか？</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="open">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>お知らせ「{{ $news->title }}」を公開しますか？</p>
            </div>
            <div class="modal-footer">
                {!! Form::open(['url'=>'backside/news/'.$news->id,'method'=>'DELETE']) !!}
                {!! Form::hidden('is_sell', false) !!}
                {!! Form::hidden('from', $from) !!}
                {!! Form::submit('公開',['class'=>'btn btn-primary mt-1 mt-md-0 w-100']) !!}
                {!! Form::close() !!}
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>