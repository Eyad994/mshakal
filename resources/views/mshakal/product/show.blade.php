@extends('mshakal.home')

@section('content')

    <div class="container">
        <div id="content" class="col-sm-12 productpage">
            <div class="row">
                <input type="hidden" name="id" id="product_id-{{$product->id}}" value="{{ $product->id }}">
                <input type="hidden" name="name" id="product_name-{{$product->id}}" value="{{ $product->name }}">
                <input type="hidden" name="image" id="product_image-{{$product->id}}" value="{{ $product->image }}">
                <input type="hidden" name="desc" id="product_desc-{{$product->id}}" value="{{ $product->desc }}">
                <input type="hidden" name="price" id="product_price-{{$product->id}}" value="{{ $product->price }}">
                <input type="hidden" name="slug" id="product_slug-{{$product->id}}" value="{{ $product->slug }}">
                <input type="hidden" name="is_weight" id="product_is_weight-{{$product->id}}" value="{{ $product->is_weight }}">
                <input type="hidden" name="category" id="product_category-{{$product->id}}" value="{{ $product->category->name }}">

                <div class="col-sm-5 product-left">
                    <div class="product-info">
                        <div class="left product-image thumbnails">
                            <div class="image"><a class="thumbnail" target="_blank" href="{{ asset('product_images/'. $product->image) }}" title="{{ $product->name }}"><img id="tmzoom" src="{{ asset('product_images/'.$product->image) }}" data-zoom-image="{{ asset('product_images/'.$product->image) }}" title="{{ $product->name }}" alt="{{ $product->name }}" /></a></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-7 product-right">
                    <div class="rating-wrapper">
                        <h3 class="product-title">{{ $product->name }}</h3>
                    </div>

                    <ul class="list-unstyled attr">
                        <li><span class="desc">Product ID: </span> {{ $product->id }}</li>
                        <li><span class="desc">Category:: </span><a href="#">{{ $product->category->name }}</a></li>
                        <li><span class="desc">Availability: </span> In Stock</li>
                    </ul>

                    <div id="product">
                        <div class="price-cartbox">

                            <ul class="list-unstyled price">
                                <li>
                                    {{ $product->desc }}
                                </li>
                            </ul>

                            <ul class="list-unstyled price">
                                <li>
                                    <h3 class="special-price">${{round($product->price, 2)}}{{--{{ \Cart::session(auth()->id())->get($product->id)->getPriceSum() }}--}}</h3>
                                </li>
                            </ul>


                            <div class="form-group qty">
                                    <label class="control-label" for="input-quantity">Qty</label>

                                @if($product->is_weight == 1)
                                <button type="button" id="button-minus" data-loading-text="Loading..." class="btn btn-primary btn-lg btn-block" style="padding: 10px !important; float: left" onclick="minus(this)"><span class="fa fa-minus"></span></button>
                                <input type="text" name="quantity" value="0.1{{--{{ \Cart::session(auth()->id())->get($product->id)->quantity }}--}}" size="2" id="input-quantity" class="form-control" />
                                    <input type="hidden" name="product_id" value="45" />
                                    <button type="button" id="button-plus" data-loading-text="Loading..." class="btn btn-primary btn-lg btn-block" style="padding: 10px !important; float: left" onclick="plus(this)" ><span class="fa fa-plus"></span></button>
                                @else
                                    <input type="text" name="quantity" value="1{{--{{ \Cart::session(auth()->id())->get($product->id)->quantity }}--}}" size="2" id="input-quantity" class="form-control" />
                                @endif
                                    <button type="button" id="button-cart" data-loading-text="Loading..." class="btn btn-primary btn-lg btn-block" style="margin-left: 10px" onclick="addToCart({{ $product->id }})">Add to Cart</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div style="height: 10px"></div>
        </div>

    </div>

    <script>

        function minus() {
         /* var qty =  $('#input-quantity').val();

          var val = --qty;
          if (val > 0)
          {
              $('#input-quantity').val(val);
          } else {
              $('#button-minus').addClass('disabled');
          }*/

            var val = parseFloat($('#input-quantity').val());
            floats = [];

            if (val > 0.1){
                val = (val - 0.1).toFixed(1);
                floats.push(val);
                val = parseFloat(val);

                $('#input-quantity').val(val);
            } else {
                $('#button-minus').addClass('disabled');
            }
        }

        function plus() {

            var i = parseFloat($('#input-quantity').val());
                floats = [];

                i = (i + 0.1).toFixed(1);
                floats.push(i);
                i = parseFloat(i);

            $('#input-quantity').val(i);
            $('#button-minus').removeClass('disabled');
            /*var qty =  $('#input-quantity').val();
            $('#input-quantity').val(++qty);
            $('#button-minus').removeClass('disabled');*/
        }

        function addToCart(id) {

            var name = $('#product_name-'+id).val();
            var price = $('#product_price-'+id).val();
            var desc = $('#product_desc-'+id).val();
            var image = $('#product_image-'+id).val();
            var slug = $('#product_slug-'+id).val();
            var category = $('#product_category-'+id).val();
            var isWeight = $('#product_is_weight-'+id).val();
            var qty = parseFloat($('#input-quantity').val());
            $.ajax({
                type: "POST",
                url: '/cart',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": id,
                    "name": name,
                    "price": price,
                    "desc": desc,
                    "image": image,
                    "slug": slug,
                    "is_weight": isWeight,
                    "category": category,
                    "qty": qty
                },
                success: function(data) {
                    $('#cart-total').text(data['cart_count']);
                    cartOnLoad();
                },
                error: function(jqXHR, textStatus, errorThrown) {

                    if (jqXHR.status === 401)
                    {
                        window.location = ("{{ route('login') }}");
                    }
                }
            });
        }
    </script>

@endsection



