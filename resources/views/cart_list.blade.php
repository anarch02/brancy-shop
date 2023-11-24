@extends('layouts.app')

@section('content')

    <!--== Start Page Header Area Wrapper ==-->
    <nav aria-label="breadcrumb" class="breadcrumb-style1" style="margin-top: 120px">
        <div class="container">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </div>
    </nav>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="section-space">
        <div class="container">
            <div class="shopping-cart-form table-responsive">
                <form action="#" method="post">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th class="product-remove">&nbsp;</th>
                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $cart)
                            <tr class="tbody-item">
                                <td class="product-remove">
                                    <a id="remove-product" data-product-id="{{ $cart->product_id }}"class="remove">×</a>
                                </td>
                                <td class="product-thumbnail">
                                    <div class="thumb">
                                        <a href="single-product.html">
                                            <img src="{{ asset('storage/products/'.$cart->product->image) }}" width="68" height="84" alt="Image-HasTech">
                                        </a>
                                    </div>
                                </td>
                                <td class="product-name">
                                    <a class="title" href="single-product.html">{{ $cart->product->name }}</a>
                                </td>
                                <td class="product-price">
                                    <span class="price">{{ '$'.$cart->product->price }}</span>
                                </td>
                                <td class="product-quantity">
                                    <div class="pro-qty">
                                        <input type="text" class="quantity" title="quantity" 
                                        value="{{ $cart->quantity }}" data-product-id={{ $cart->product_id }}>
                                    </div>
                                </td>
                                <td class="product-subtotal">
                                    <span class="price">${{ $cart->price * $cart->quantity }}</span>
                                </td>
                            </tr>                                
                            @endforeach
                            <tr class="tbody-item-actions">
                                <td colspan="6">
                                    <button type="submit" class="btn-update-cart disabled" disabled>Update cart</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="coupon-wrap">
                        <h4 class="title">Coupon</h4>
                        <p class="desc">Enter your coupon code if you have one.</p>
                        <input type="text" class="form-control" placeholder="Coupon code">
                        <button type="button" class="btn-coupon">Apply coupon</button>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="cart-totals-wrap">
                        <h2 class="title">Cart totals</h2>
                        <table>
                            <tbody>
                                {{-- <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td>
                                        <span class="amount">
                                            @php
                                            $total = 0;

                                            foreach ($carts as $cart) {
                                                $total += $cart['price'];
                                            }

                                            echo "$" . number_format($total, 2); 
                                            @endphp 
                                        </span>
                                    </td>
                                </tr> --}}
                                <tr class="shipping-totals">
                                    <th>Shipping</th>
                                    <td>
                                        <ul class="shipping-list">
                                            <li class="radio">
                                                <input type="radio" name="shipping" id="radio1" checked>
                                                <label for="radio1">Flat rate: <span>$3.00</span></label>
                                            </li>
                                            <li class="radio">
                                                <input type="radio" name="shipping" id="radio2">
                                                <label for="radio2">Free shipping</label>
                                            </li>
                                            <li class="radio">
                                                <input type="radio" name="shipping" id="radio3">
                                                <label for="radio3">Local pickup</label>
                                            </li>
                                        </ul>
                                        <p class="destination">Shipping to <strong>USA</strong>.</p>
                                        <a href="javascript:void(0)" class="btn-shipping-address">Change address</a>
                                    </td>
                                </tr>
                                <tr class="cart-total">
                                    <th>Total</th>
                                    <td>
                                        <span class="amount">
                                            @php
                                                $total = 0;

                                                foreach ($carts as $cart) {
                                                    $total += $cart['price'];
                                                }

                                                echo "$" . number_format($total, 2); 
                                            @endphp    
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-end">
                            <a href="{{ route('checkout') }}" class="checkout-button">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Product Area Wrapper ==-->

@endsection