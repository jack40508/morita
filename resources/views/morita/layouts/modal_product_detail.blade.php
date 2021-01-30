<!-- Modal -->
<div class="modal fade modal-product-detail text-left" id="productModalCenter{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="productModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="productModalLongTitle">{{ $product->name }}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-10 text-center mb-3">
                        <img class="mw-100" src="/img/product/product_{{ $product->id }}.jpg" alt="Modal product image">
                    </div>
                    <div class="col-10 text-center">
                        @if(count($product->productsizes) == 1)
                            <h4>￥{{ $product->productsizes[0]->price }}</h4>
                        @else
                            @foreach($product->productsizes as $product->productsize)
                                <h4>{{ $product->productsize->size }} ￥{{ $product->productsizes[0]->price }}</h4>
                            @endforeach
                        @endif
                    </div>
                    <div class="col-10">
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>