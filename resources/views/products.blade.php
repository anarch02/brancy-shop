@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/plugins/range-slider.css')}}">
@endsection

@section('content')

    <!--== Start Page Header Area Wrapper ==-->
    <section style="margin-top: 120px" class="page-header-area pt-10 pb-9" data-bg-color="#FFF3DA">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="page-header-st3-content text-center text-md-start">
                        <ol class="breadcrumb justify-content-center justify-content-md-start">
                            <li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
                            <li class="breadcrumb-item active text-dark" aria-current="page"> {{ isset($category) ? $category : 'All products' }} </li>
                        </ol>
                        <h2 class="page-header-title">{{ isset($category) ? $category : 'All products' }}</h2>
                    </div>
                </div>
                <div class="col-md-7">
                    <h5 class="showing-pagination-results mt-5 mt-md-9 text-center text-md-end">Showing 09 Results</h5>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Shop Top Bar Area Wrapper ==-->
    <div class="shop-top-bar-area">
        <div class="container">
            <div class="shop-top-bar">
                <select class="select-shoing">
                    <option data-display="Trending">Trending</option>
                    <option value="1">Featured</option>
                    <option value="2">Best Selling</option>
                    <option value="3">Alphabetically, A-Z</option>
                    <option value="4">Alphabetically, Z-A</option>
                    <option value="5">Price, low to high</option>
                    <option value="6">Price, high to low</option>
                    <option value="7">Date, new to old</option>
                    <option value="8">Date, old to new</option>
                </select>

                <div class="select-on-sale d-flex d-md-none">
                    <span>On Sale :</span>
                    <select class="select-on-sale-form">
                        <option selected>Yes</option>
                        <option value="1">No</option>
                    </select>
                </div>

                <div class="select-price-range">
                    <h4 class="title">Pricing</h4>
                    <div class="select-price-range-slider">
                        <div class="slider-range" id="slider-range"></div>
                        <div class="slider-labels">
                            <span id="slider-range-value1"></span>
                            <span>-</span>
                            <span id="slider-range-value2"></span>
                        </div>
                    </div>
                </div>

                <div class="select-on-sale d-none d-md-flex">
                    <span>On Sale :</span>
                    <select class="select-on-sale-form">
                        <option selected>Yes</option>
                        <option value="1">No</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!--== End Shop Top Bar Area Wrapper ==-->

    <x-public.categories></x-public.categories>


    <!--== Start Product Area Wrapper ==-->
    <section class="section-space">
        <div class="container">
            <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">
                @foreach ($products as $product)
                <x-public.product :price="$product->price"
                    :title="$product->name"
                    :code="$product->code"
                    :image="$product->image"
                    :id="$product->id"
                    ></x-public.product>                   
                @endforeach

                {{ $products->links() }}
                
            </div>
        </div>
    </section>
    <!--== End Product Area Wrapper ==-->

    <!--== Start Product Banner Area Wrapper ==-->
    <section>
        <div class="container">
            <!--== Start Product Category Item ==-->
            <a href="product.html" class="product-banner-item">
                <img src="{{ asset('assets/images/shop/banner/7.webp')}}" width="1170" height="240" alt="Image-HasTech">
            </a>
            <!--== End Product Category Item ==-->
        </div>
    </section>
    <!--== End Product Banner Area Wrapper ==-->


@endsection

@section('scripts')
<script src="{{ asset('assets/js/plugins/range-slider.js') }}"></script>
    
@endsection