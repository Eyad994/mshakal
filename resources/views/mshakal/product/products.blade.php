@extends('mshakal.home')

@section('content')


    <div class="container">

        <div id="product-category" class="container">
            <ul class="breadcrumb">
                <li><a href="index9328.html?route=common/home"><i class="fa fa-home"></i></a></li>
                <li><a href="index70a9.html?route=product/category&amp;path=57">French fries</a></li>
            </ul>
            <div class="row"><aside id="column-left" class="col-sm-3 hidden-xs">
                    <div class="box categories">
                    <div class="box-heading">Categories</div>
                    <div class="box-content">
                        <ul class="box-category treeview-list treeview">
                            @foreach($categories as $category)
                                <li>
                                    <a href="/products/{{$category->id}}">{{ $category->name }}</a>
                                </li>
                                @endforeach
                        </ul>
                    </div>
            </div>



            <script type="text/javascript"><!--
                $('#banner0').swiper({
                    effect: 'fade',
                    autoplay: 2500,
                    pagination: '.swiper-pagination',  // If we need pagination
                    autoplayDisableOnInteraction: false
                });
                --></script>

            <span class="special_default_width" style="display:none; visibility:hidden"></span>

            </aside>

            <div id="content" class="col-sm-9">
                <h1 class="page-title">French fries</h1>
                <div class="row category_thumb">
                    <div class="col-sm-2 category_img"><img src="{{ asset('image/cache/catalog/category-banner-1273x200.jpg') }}" alt="French fries" title="French fries" class="img-thumbnail" /></div>
                </div>

                <div class="category_filter">
                    <div class="col-md-4 btn-list-grid">
                        <div class="btn-group">
                            <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
                            {{--<button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>--}}
                        </div>
                    </div>
                    <div class="pagination-right">
                        <div class="sort-by-wrapper">
                            <div class="col-md-2 text-right sort-by">
                            </div>
                            <div class="col-md-3 text-right sort">

                            </div>
                        </div>

                    </div>
                </div>

                <div class="row cat_prod">


                    @foreach($products as $product)
                        <form action="{{ route('cart.store') }}" method="POST">
                            @csrf

                            <input type="hidden" name="id" id="product_id-{{$product->id}}" value="{{ $product->id }}">
                            <input type="hidden" name="name" id="product_name-{{$product->id}}" value="{{ $product->name }}">
                            <input type="hidden" name="image" id="product_image-{{$product->id}}" value="{{ $product->image }}">
                            <input type="hidden" name="desc" id="product_desc-{{$product->id}}" value="{{ $product->desc }}">
                            <input type="hidden" name="price" id="product_price-{{$product->id}}" value="{{ $product->price }}">
                            <input type="hidden" name="slug" id="product_slug-{{$product->id}}" value="{{ $product->slug }}">
                            <input type="hidden" name="category" id="product_category-{{$product->id}}" value="{{ $product->category->name }}">

                        <div class="product-layout product-list col-xs-12">
                            <div class="product-block product-thumb">
                                <div class="product-block-inner">
                                    <div class="image">
                                        <a href="/product/{{ $product->slug }}">
                                            <img src="{{ asset('product_images/'.$product->image) }}" title="{{ $product->name }}" alt="{{ $product->name }}" class="img-responsive reg-image"/>
                                        </a>

                                        {{--<div class="button-group">
                                            <div class="top-btn">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('47');"><i class="fa fa-heart"></i></button>
                                                <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="indexb08f.html?route=product/quick_view&amp;path=57&amp;product_id=47">
                                                        <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('47');"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>--}}
                                    </div>

                                    <div class="product-details">
                                        <div class="caption">
                                            <h4><a href="/product/{{ $product->slug }}">{{ $product->name }}</a></h4>

                                            <div class="rating list-rate">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>

                                            <p class="desc">{{ $product->desc }}</p>

                                            <p class="price">
                                               ${{round($product->price, 2)}}

                                            </p>


                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>

                                            {{--<button type="button" class="addtocart btn btn-primary" onclick="addToCart({{$product->id}})"><span>Add to Cart</span></button>--}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                        @endforeach

                </div>
                {{--<div class="pagination-wrapper">

                    <div class="col-sm-12">
                        {{ $products->links() }}
                    </div>
                    --}}{{--<div class="col-sm-6 text-left page-link"><ul class="pagination"><li class="active"><span>1</span></li><li><a href="indexfd0e.html?route=product/category&amp;path=57&amp;page=2">2</a></li><li><a href="indexfd0e.html?route=product/category&amp;path=57&amp;page=2">&gt;</a></li><li><a href="indexfd0e.html?route=product/category&amp;path=57&amp;page=2">&gt;|</a></li></ul></div>
                    <div class="col-sm-6 text-right page-result">Showing 1 to 12 of 14 (2 Pages)</div>--}}{{--
                </div>--}}
            </div>

        </div>
</div>
    </div>

    <script>
       function addToCart(id) {

           var name = $('#product_name-'+id).val();
           var price = $('#product_price-'+id).val();
           var desc = $('#product_desc-'+id).val();
           var image = $('#product_image-'+id).val();
           var slug = $('#product_slug-'+id).val();
           var category = $('#product_category-'+id).val();

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
                   "category": category
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