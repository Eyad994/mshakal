<li>
    <table class="table table-striped">
        <tbody>
        @if(count(\Cart::session(auth()->id())->getContent()) > 0)
            <?php $i=0 ?>
            @foreach(\Cart::session(auth()->id())->getContent() as $item)
                <tr>
                    <td class="text-center"> <a href="/product/{{$item->attributes->slug}}"><img src="/product_images/{{$item->attributes->image}}" style="width: 100px; height: 100px" alt="Exercitat Virginia" title="Exercitat Virginia" class="img-thumbnail"></a> </td>
                    <td class="text-left"><a href="/product/{{$item->attributes->slug}}">{{ $item->name }}</a>              <br>
                        - <small>Qty: {{$item->quantity}}</small></td>
                    <td class="text-right">${{ round(\Cart::get($item->id)->getPriceSum(), 2)  }}</td>
                    <td class="text-center"><button type="button" title="Remove" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</li>
<li>
    <div>
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td class="text-right"><strong>Total</strong></td>
                <td class="text-right">${{ round(\Cart::getTotal(), 2) }}</td>
            </tr>
            </tbody>
        </table>
        <p class="text-right button-container"><a href="{{ route('cart.index') }}" class="addtocart btn btn-primary"><strong> View Cart</strong></a>&nbsp;&nbsp;&nbsp;<a href="#" class="checkout btn btn-primary"><strong> Place Order</strong></a></p>
    </div>
</li>