@extends('layouts.app')

@section('style')
    
@endsection

@section('content')
    <!--== Start Hero Area Wrapper ==-->
    <section class="hero-slider-area position-relative">
        <div class="swiper hero-slider-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-slide-item">
                    <div class="container">
                        <div class="row align-items-center position-relative">

                            <div class="col-12 col-md-6">
                                <div class="hero-slide-content">
                                    <div class="hero-slide-text-img"><img src="assets/images/slider/text-theme.webp" width="427" height="232" alt="Image"></div>
                                    <h2 class="hero-slide-title">CLEAN FRESH</h2>
                                    <p class="hero-slide-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis.</p>
                                    <a class="btn btn-border-dark" href="product.html">BUY NOW</a>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="hero-slide-thumb">
                                    <img src="{{asset('assets/images/hero1.webp')}}" width="841" height="832" alt="Image">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="hero-slide-text-shape"><img src="assets/images/slider/text1.webp" width="70" height="955" alt="Image"></div>
                    <div class="hero-slide-social-shape"></div>
                </div>
                <div class="swiper-slide hero-slide-item">
                    <div class="container">
                        <div class="row align-items-center position-relative">
                            <div class="col-12 col-md-6">
                                <div class="hero-slide-content">
                                    <div class="hero-slide-text-img"><img src="assets/images/slider/text-theme.webp" width="427" height="232" alt="Image"></div>
                                    <h2 class="hero-slide-title">Facial Cream</h2>
                                    <p class="hero-slide-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis.</p>
                                    <a class="btn btn-border-dark" href="product.html">BUY NOW</a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="hero-slide-thumb">
                                    <img src="assets/images/slider/slider2.webp" width="841" height="832" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide-text-shape"><img src="assets/images/slider/text1.webp" width="70" height="955" alt="Image"></div>
                    <div class="hero-slide-social-shape"></div>
                </div>
            </div>
            <!--== Add Pagination ==-->
            <div class="hero-slider-pagination"></div>
        </div>
        <div class="hero-slide-social-media">
            <a href="https://www.pinterest.com/" target="_blank" rel="noopener"><i class="fa fa-pinterest-p"></i></a>
            <a href="https://twitter.com/" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a>
            <a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a>
        </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <x-public.categories></x-public.categories>

    <!--== Start Product Area Wrapper ==-->
    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Top sale</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis</p>
                    </div>
                </div>
            </div>
            <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">
                @foreach ($products as $product)
                <x-public.product :price="$product->price"
                    :title="$product->name"
                    :code="$product->code"
                    :image="$product->image"
                    :id="$product->id"
                    ></x-public.product>   
                                     
                @endforeach
            </div>
        </div>
    </section>
    <!--== End Product Area Wrapper ==-->


    <X-public.latest-posts></X-public.latest-posts>

    <!--== Start News Letter Area Wrapper ==-->
    <section class="section-space pt-0">
        <div class="container">
            <div class="newsletter-content-wrap" data-bg-img="assets/images/photos/bg1.webp">
                <div class="newsletter-content">
                    <div class="section-title mb-0">
                        <h2 class="title">Join with us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam.</p>
                    </div>
                </div>
                <div class="newsletter-form">
                    <form>
                        <input type="email" class="form-control" placeholder="enter your email">
                        <button class="btn-submit" type="submit"><i class="fa fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--== End News Letter Area Wrapper ==-->
@endsection