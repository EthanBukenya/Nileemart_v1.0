

<div class="header-action-icon-2">
    <a class="mini-cart-icon" href="/cart">
        <img alt="" src="{{ asset('assets/img/icon-img/cart 64.png') }}" width="60px" height="60px">
        <span class="pro-count white">
            @if(Cart::instance('cart')->count() > 0)
            {{Cart::instance('cart')->count()}}
        @endif
        </span>
    </a>
 
</div>
