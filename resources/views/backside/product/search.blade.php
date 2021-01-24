@include('backside.product.index')

<script>
    var search_name = null;
    var check_productkategories = new Array();
    var check_status = new Array();
</script>

@if(!is_null($search_name))
    <script>
        search_name = '{{ $search_name }}';
    </script>
@endif

@if(!is_null($search_productkategories))
    @foreach($search_productkategories as $key => $check_productkategorie)
        <script>
            check_productkategories[{{ $key }}] = '{{ $check_productkategorie }}';
        </script>
    @endforeach
@endif

@if(!is_null($search_status))
    @foreach($search_status as $key => $check_status)
        <script>
            check_status[{{ $key }}] = '{{ $check_status }}';
        </script>
    @endforeach
@endif


<script src="{{ asset('/js/backside/product-search.js') }}"></script>