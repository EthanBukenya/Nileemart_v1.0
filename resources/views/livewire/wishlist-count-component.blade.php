

<div class="header-action-icon-2">
    <a class="mini-cart-icon" href="/wishlist">
        <img alt="" src="{{ asset('assets/img/icon-img/wish list.png') }}" width="60px" height="60px">
        <span class="pro-count white">
			@if(Cart::instance('wishlist')->count() > 0)
			    <span class="index">{{Cart::instance('wishlist')->count()}} </span>
			@endif
        </span>
    </a>
    <!--
    <div class="cart-dropdown-wrap cart-dropdown-hm2">
        <ul>
            <li>
                <div class="shopping-cart-img">
                    <a href="product-details.html"><img alt="Surfside Media" src="assets/imgs/shop/thumbnail-3.jpg"></a>
                </div>
                <div class="shopping-cart-title">
                    <h4><a href="product-details.html">Plain Striola Shirts</a></h4>
                    <h3><span>1 × </span>$800.00</h3>
                </div>
                <div class="shopping-cart-delete">
                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                </div>
            </li>
            <li>
                <div class="shopping-cart-img">
                    <a href="product-details.html"><img alt="Surfside Media" src="assets/imgs/shop/thumbnail-4.jpg"></a>
                </div>
                <div class="shopping-cart-title">
                    <h4><a href="product-details.html">Macbook Pro 2022</a></h4>
                    <h3><span>1 × </span>$3500.00</h3>
                </div>
                <div class="shopping-cart-delete">
                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                </div>
            </li>
        </ul>
        <div class="shopping-cart-footer">
            <div class="shopping-cart-total">
                <h4>Total <span>$383.00</span></h4>
            </div>
            <div class="shopping-cart-button">
                <a href="cart.html">View cart</a>
                <a href="shop-checkout.php">Checkout</a>
            </div>
        </div>
    </div>-->
</div>
