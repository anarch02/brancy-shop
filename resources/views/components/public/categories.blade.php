
    <!--== Start Product Category Area Wrapper ==-->
    <section class="section-space pb-0">
        <div class="container">
            <div class="row g-3 g-sm-6">
                {{-- <div class="col-6 col-lg-4 col-lg-2 col-xl-2">
                    <!--== Start Product Category Item ==-->
                    <a href="product.html" class="product-category-item">
                        <img class="icon" src="assets/images/shop/category/1.webp" width="70" height="80" alt="Image-HasTech">
                        <h3 class="title">Hare care</h3>
                        <span class="flag-new">new</span>
                    </a>
                    <!--== End Product Category Item ==-->
                </div>

                <div class="col-6 col-lg-4 col-lg-2 col-xl-2 mt-xl-0 mt-sm-6 mt-4">
                    <!--== Start Product Category Item ==-->
                    <a href="product.html" class="product-category-item" data-bg-color="#FFEACC">
                        <img class="icon" src="assets/images/shop/category/4.webp" width="80" height="80" alt="Image-HasTech">
                        <h3 class="title">Face skin</h3>
                        <span data-bg-color="#835BF4" class="flag-new">sale</span>
                    </a>
                    <!--== End Product Category Item ==-->
                </div> --}}


                @foreach ($categories as $category)
                <div class="col-6 col-lg-4 col-lg-2 col-xl-2">
                    <!--== Start Product Category Item ==-->
                    <a href="{{ route('category', $category->slug) }}" class="product-category-item" data-bg-color="{{$category->color}}">
                        <img class="icon" src="{{ asset($category->image) }}" width="80" height="80" alt="Image-HasTech">
                        <h3 class="title"> {{$category->name}} </h3>
                    </a>
                    <!--== End Product Category Item ==-->
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--== End Product Category Area Wrapper ==-->