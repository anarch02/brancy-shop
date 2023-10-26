@extends('layouts.app')

@section('content')
    <!--== Start Page Header Area Wrapper ==-->
    <nav aria-label="breadcrumb" class="breadcrumb-style1 mb-10">
        <div class="container">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </div>
    </nav>

    <!--== Start Blog Area Wrapper ==-->
    <section class="section-space pt-0">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-8">
                    <div class="row">
                        @foreach ($posts as $post)
                            <x-public.post :slug="$post->slug" :title="$post->title" :image="$post->thumbnail" />
                        @endforeach

                        <div class="col-12">
                            <ul class="pagination justify-content-center me-auto ms-auto mt-7 mb-8 mb-xl-0">
                                <li class="page-item">
                                    <a class="page-link previous" href="product.html" aria-label="Previous">
                                        <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="product.html">01</a></li>
                                <li class="page-item"><a class="page-link" href="product.html">02</a></li>
                                <li class="page-item"><a class="page-link" href="product.html">03</a></li>
                                <li class="page-item"><a class="page-link" href="product.html">....</a></li>
                                <li class="page-item">
                                    <a class="page-link next" href="product.html" aria-label="Next">
                                        <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="blog-sidebar-widget">
                        <div class="blog-search-widget">
                            <form action="#">
                                <input type="search" placeholder="Search Here">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog-widget">
                            <h4 class="blog-widget-title">Popular Categoris</h4>
                            <ul class="blog-widget-category">
                                <li><a href="blog.html">Accesasories <span>(6)</span></a></li>
                                <li><a href="blog.html">Computer <span>(4)</span></a></li>
                                <li><a href="blog.html">Covid-19 <span>(2)</span></a></li>
                                <li><a href="blog.html">Electronics <span>(12)</span></a></li>
                                <li><a href="blog.html">Furniture <span>(9)</span></a></li>
                            </ul>
                        </div>
                        <div class="blog-widget">
                            <h4 class="blog-widget-title">Recent Posts</h4>
                            <div class="blog-widget-post">
                                <div class="blog-widget-single-post">
                                    <a href="blog-details.html">
                                        <img src="assets/images/blog/s1.webp" width="75" height="78" alt="Images">
                                        <span class="title">Lorem ipsum dolor sit amet conse adipis.</span>
                                    </a>
                                    <span class="date">Sep 24,2022</span>
                                </div>
                                <div class="blog-widget-single-post">
                                    <a href="blog-details.html">
                                        <img src="assets/images/blog/s2.webp" width="75" height="78" alt="Images">
                                        <span class="title">Lorem ipsum dolor sit amet conse adipis.</span>
                                    </a>
                                    <span class="date">Sep 25,2022</span>
                                </div>
                                <div class="blog-widget-single-post">
                                    <a href="blog-details.html">
                                        <img src="assets/images/blog/s3.webp" width="75" height="78" alt="Images">
                                        <span class="title">Lorem ipsum dolor sit amet conse adipis.</span>
                                    </a>
                                    <span class="date">Sep 26,2022</span>
                                </div>
                            </div>
                        </div>
                        <div class="blog-widget mb-0">
                            <h4 class="blog-widget-title">Popular Tags</h4>
                            <ul class="blog-widget-tags">
                                <li><a href="blog.html">Beauty</a></li>
                                <li><a href="blog.html">MakeupArtist</a></li>
                                <li><a href="blog.html">Makeup</a></li>
                                <li><a href="blog.html">Hair</a></li>
                                <li><a href="blog.html">Nails</a></li>
                                <li><a href="blog.html">Hairstyle</a></li>
                                <li><a href="blog.html">Skincare</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Blog Area Wrapper ==-->

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