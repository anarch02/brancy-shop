        <!--== Start Aside Cart ==-->
        <aside class="aside-cart-wrapper offcanvas offcanvas-end" tabindex="-1" id="AsideOffcanvasCart" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                {{-- @dump($products['1']->product->name) --}}
                <h1 class="d-none" id="offcanvasRightLabel">Shopping Cart</h1>
                <a href="{{ route('cart.checkout') }}" 
                class="btn-aside-cart-close">Shopping Cart <i class="fa fa-chevron-right"></i></a>
            </div>
            <div class="offcanvas-body">
                <ul class="aside-cart-product-list">
                    {{-- @dump($products) --}}
                    @foreach ($products as $product)
                    <li class="aside-product-list-item">
                        <button data-product-id="{{ $product->product_id }}" id="remove-product" class="remove">×</button>
                        <a href="product-details.html">
                            <img src="{{ asset('assets/images/shop/cart1.webp')}}" width="68" height="84" alt="Image">
                            <span class="product-title">{{$product->product->name}}</span>
                        </a>
                        <span class="product-price">{{ $product->quantity }} × ${{ $product->price }}</span>
                    </li>                        
                    @endforeach
                </ul>
                <p class="cart-total"><span>Total:</span><span class="amount">
                    @php
                        $total = 0;

                        foreach ($products as $product) {
                            $total += $product['price'];
                        }

                        echo "$" . number_format($total, 2); 
                    @endphp    
                </span></p>
                {{-- <a class="btn-total" href="product-cart.html">View cart</a> --}}
                {{-- <a class="btn-total" href="product-checkout.html">Checkout</a> --}}
            </div>
        </aside>
        <!--== End Aside Cart ==-->