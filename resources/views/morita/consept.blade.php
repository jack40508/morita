@extends('morita.layouts.app')

@section('content')
<div class="container text-color-fontgray animate_fade-in">
    <div class="row" id="conseptDivText1">
        <div class="col-md-8">
            <h2 class="consept-title">私たちの使命</h2>
            <hr>
            <p class="consept-p">
                私たちパティスリーモリタのミッション（使命）は、<br>
                「時代に合った美味しいもので幸せに」<br>
                「上質だけど気取らない、身近な、楽しい時間をみなさまにお届けします」<br>
                “Offrir dés moments de plaisir de qualité et de simplicité”<br>
                「時代に合った美味しいもので幸せに」とは、私たちモリタが、<br>
                時代に合った美味しいお菓子を日々提供し、<br>
                お客様一人ひとりに最高の「幸せ」を感じていただくこと、を表しています。<br>
                これが私たちモリタが掲げる最大のミッション（使命）です。
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <img src="/img/morita/consept-1.jpg" alt="consept-1" class='mb-3 mw-100' id='imgConsept1'/>
        </div>
        <div class="col-md-7">
            <div class="row">
                <div class="col-12 flex-column-reverse" id="conseptDivText2">
                    <img src="/img/morita/consept-2.jpg" alt="consept-2" class="mw-100 d-none d-md-block"/>
                    <div id="consept-text-2" class="mt-0 mt-md-3">
                        <p class="consept-p">
                            私たちモリタのビジョン（理想）は、<br>
                            お客様に真心を込めた「サービス」と「感動」を提供し続けます。<br>
                            「安全」で「最高品質」の商品を提供し続けます。<br>
                            「環境」への配慮を心がけます。<br>
                        </p>
                        <p class="consept-p">
                            これが私たちモリタが掲げるビジョン（理想）です。
                        </p>
                    </div>
                    <img src="/img/morita/consept-2.jpg" alt="consept-2" class="mw-100 d-md-none"/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
