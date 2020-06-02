@extends('mshakal.home')

@section('content')
    <div id="checkout-cart" class="container"style="margin-top: 80px">

        <div class="row">
            <aside id="column-left" class="col-sm-3 hidden-xs">
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

        <div class="swiper-viewport">
            <div id="banner0" class="swiper-container  single-banner  swiper-container-horizontal swiper-container-fade">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-active" style="width: 296px; opacity: 1; transform: translate3d(0px, 0px, 0px);"><a href="#"><img src="https://codezeel.com/opencart/OPC02/OPC020032/image/cache/catalog/left-banner-1-297x320.jpg" alt="Left banner" class="img-responsive"></a></div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span></div>
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

        </aside><div id="content" class="col-sm-9">
            <h1 class="page-title">@if(\Cart::getTotalQuantity()>0)
                    {{ \Cart::getTotalQuantity()}} Product(s) In Your Cart
                    <br>
                @else
                    No Product(s) In Your Cart<br>
                @endif
            </h1>
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="table-responsive">
                    <table class="table table-bordered shopping-cart">
                        <thead>
                        <tr>
                            <td class="text-center">Image</td>
                            <td class="text-left">Product Name</td>
                            <td class="text-left">Category</td>
                            <td class="text-left">Quantity</td>
                            <td class="text-right">Unit Price</td>
                            <td class="text-right">Total</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cartCollection as $item)
                        <tr>
                            <td class="text-center"> <a href="/product_images/{{ $item->attributes->image }}" target="_blank"><img src="/product_images/{{ $item->attributes->image }}" width="100" height="100" alt="Commodi Consequatur" title="Commodi Consequatur" class="img-thumbnail"></a> </td>
                            <td class="text-left"><a href="/product/{{ $item->attributes->slug }}">{{ $item->name }}</a></td>
                            <td class="text-left">{{ $item->attributes->category }}</td>
                            <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">
                                    <input type="text" name="quantity[122]" value="{{ $item->quantity }}" size="1" class="form-control">
                                    <span class="input-group-btn">
                  <button type="submit" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Update"><i class="fa fa-refresh"></i></button>
                  <button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="cart.remove('122');" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
                  </span>
                                </div>
                            </td>
                            <td class="text-right">${{round($item->price, 2)}}</td>
                            <td class="text-right">${{round(\Cart::get($item->id)->getPriceSum(), 2)}}</td>

                        </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
            </form>

            <hr>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <table class="table table-bordered">
                        <tbody>
                        @if(count($cartCollection)>0)
                        <tr>
                            <td class="text-right"><strong>Total:</strong></td>
                            <td class="text-right"><strong>${{round(\Cart::getTotal(), 2)}}</strong> </td>
                        </tr>
                            @else
                        <tr>
                            <td class="text-right"><strong>Total:</strong></td>
                            <td class="text-right">$00.00</td>
                        </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="buttons clearfix">
                <div class="pull-left"><a href="{{ route('home') }}" class="btn btn-default">Continue Shopping</a></div>
                <div class="pull-right"><a href="#" class="btn btn-primary">Checkout</a></div>
            </div>
        </div>
    </div>
    </div>
    {{--<div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>
        @if(session()->has('success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(session()->has('alert_msg'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('alert_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endforeach
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <br>
                @if(\Cart::getTotalQuantity()>0)
                    <h4>{{ \Cart::getTotalQuantity()}} Product(s) In Your Cart</h4><br>
                @else
                    <h4>No Product(s) In Your Cart</h4><br>
                    <a href="/" class="btn btn-dark">Continue Shopping</a>
                @endif

                @foreach($cartCollection as $item)
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="/product_images/{{ $item->attributes->image }}" class="img-thumbnail" width="200" height="200">
                        </div>
                        <div class="col-lg-5">
                            <p>
                                <b><a href="/shop/{{ $item->attributes->slug }}">{{ $item->name }}</a></b><br>
                                <b>Price: </b>${{ $item->price }}<br>
                                <b>Sub Total: </b>${{ \Cart::get($item->id)->getPriceSum() }}<br>
                                --}}{{--                                <b>With Discount: </b>${{ \Cart::get($item->id)->getPriceSumWithConditions() }}--}}{{--
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <form action="{{ route('cart.update', $item->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="form-group row">
                                        <input type="hidden" value="{{ $item->id}}" id="id-{{ $item->id }}" name="id">
                                        <input type="number" class="form-control form-control-sm" value="{{ $item->quantity }}"
                                               id="quantity-{{ $item->id }}" name="quantity" style="width: 70px; margin-right: 10px;">
                                        <button class="btn btn-secondary btn-sm" style="margin-right: 25px;"><i class="fa fa-edit"></i></button>
                                    </div>
                                </form>
                                <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $item->id }}" id="destroy-id-{{ $item->id }}" name="id">
                                    <button class="btn btn-dark btn-sm" style="margin-right: 10px;"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
                @if(count($cartCollection)>0)
                    <form action="" method="POST">
                        {{ csrf_field() }}
                        <button class="btn btn-secondary btn-md">Clear Cart</button>
                    </form>
                @endif
            </div>
            @if(count($cartCollection)>0)
                <div class="col-lg-5">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Total: </b>${{ \Cart::getTotal() }}</li>
                        </ul>
                    </div>
                    <br><a href="/shop" class="btn btn-info">Continue Shopping</a>
                    <a href="/checkout" class="btn btn-success">Proceed To Checkout</a>
                </div>
            @endif
        </div>
        <br><br>
    </div>--}}
@endsection
