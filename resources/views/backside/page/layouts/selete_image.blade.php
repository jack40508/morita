@foreach($bannerimages as $bannerimage)
    <div class="col-6 col-md-4 mt-3">
        {!! Form::radio('select_bannerimage', $bannerimage->id, false, ['class'=>'input-hidden', 'id'=>'page'.$page->id.'bannerimage'.$bannerimage->id]) !!}
        <label for="page{{ $page->id }}bannerimage{{ $bannerimage->id }}">
        <img
            src="../img/banner/banner_{{ $bannerimage->id }}.jpg"
            alt="banner_{{ $bannerimage->id }}"
            class="select-bannerimage"/>
        </label>
    </div>
@endforeach
