@extends('layouts.app')

@section('content')
    <!--== Start Page Header Area Wrapper ==-->
    <nav aria-label="breadcrumb" class="breadcrumb-style1" style="margin-top: 120px">
        <div class="container">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{route('blog')}}">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page"> {{$post->title}} </li>
            </ol>
        </div>
    </nav>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Blog Detail Area Wrapper ==-->
    <section class="section-space pb-0">
        <div class="container">
            <div class="blog-detail">
                <h3 class="blog-detail-title">{{ $post->title }}</h3>
                <div class="blog-detail-category">
                    <a class="category" href="blog.html">beauty</a>
                    <a class="category" data-bg-color="#957AFF" href="blog.html">Fashion</a>
                </div>
                <img class="blog-detail-img mb-7 mb-lg-10" src="{{ asset('storage/posts/'.$post->thumbnail) }}" width="1170" height="1012" alt="Image">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-md-7">
                                <ul class="blog-detail-meta">
                                    <li class="meta-admin"><img src="{{ asset('assets/images/blog/admin.webp') }}" alt="Image"> Tomas Alva Addison</li>
                                    <li>February 13, 2022</li>
                                </ul>
                            </div>
                            <div class="col-md-5">
                                <div class="blog-detail-social">
                                    <span>Share:</span>
                                    <a href="https://www.pinterest.com/" target="_blank" rel="noopener"><i class="fa fa-pinterest-p"></i></a>
                                    <a href="https://twitter.com/" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                        <p class="desc mt-4 mt-lg-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae mauris, feugiat malesuada adipiscing est. Turpis at cras scelerisque cursus et enim. Tellus integer purus scelerisque convallis gravida volutpat elit. In purus amet, suspendisse et lorem. At in id et facilisi molestie interdum blandit elementum. Arcu lectus in ultrices mauris amet, volutpat arcu. Habitant ac vitae, quam egestas in sed. Dignissim odio nunc fermentum donec risus. Volutpat elementum aliquet nec ligula. Rhoncus sem condimentum egestas scelerisque. Ac commodo neque auctor porttitor enim, tristique mollis laoreet. Interdum tellus tortor senectus erat enim in. Penatibus odio sed in dui a id urna. Tellus odio adipiscing erat viverra tempor.</p>
                        <p class="desc mb-6 mb-lg-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Gravida quis turpis feugiat sapien venenatis. Iaculis nunc nisl risus mattis elit id lobortis. Proin erat fermentum tempor elementum bibendum. Proin sed in nunc purus. Non duis eu pretium dictumst sed habitant sit vitae eget. Nisi sit lacus, fusce diam. Massa odio sit velit sed purus quis dolor.</p>
                    </div>
                </div>
                <img class="blog-detail-img" src="{{ asset('assets/images/blog/blog-detail2.webp') }}" width="1170" height="700" alt="Image">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <p class="desc mt-6 mt-lg-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Gravida quis turpis feugiat sapien venenatis. Iaculis nunc nisl risus mattis elit id lobortis. Proin erat fermentum tempor elementum bibendum. Proin sed in nunc purus. Non duis eu pretium dictumst sed habitant sit vitae eget. Nisi sit lacus, fusce diam. Massa odio sit velit sed purus quis dolor.</p>
                        <ul class="blog-detail-list">
                            <li>• Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li>• Massa odio sit velit sed purus quis dolor.</li>
                            <li>• Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li>• Proin sed in nunc purus. Non duis eu pretium dictumst</li>
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <blockquote class="blog-detail-blockquote mt-6 mt-lg-10 mb-6 mb-lg-10">
                            <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris semper purus, at venenatis scelerisque nibh. Nisl sit convallis accumsan integer lorem. Nibh nunc in nulla quis pulvinar dictum. Eget nisi, praesent proin viverra.</p>
                            <span class="user-name">BY Momen de tomas</span>
                            <img class="quote-icon" src="{{ asset('assets/images/icons/quote1.webp') }}" width="84" height="60" alt="Icon">
                        </blockquote>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <p class="desc mb-6 mb-lg-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Gravida quis turpis feugiat sapien venenatis. Iaculis nunc nisl risus mattis elit id lobortis. Proin erat fermentum tempor elementum bibendum. Proin sed in nunc purus. Non duis eu pretium dictumst sed habitant sit vitae eget. Nisi sit lacus, fusce diam. Massa odio sit velit sed purus quis dolor.</p>
                        <img class="blog-detail-img" src="{{ asset('assets/images/blog/blog-detail3.webp') }}" width="1070" height="340" alt="Image">
                    </div>
                </div>
            </div>

            <div class="section-space pb-0">
                <!--== Start Product Category Item ==-->
                <a href="product.html" class="product-banner-item">
                    <img src="{{ asset('assets/images/shop/banner/9.webp') }}" width="1170" height="200" alt="Image-HasTech">
                </a>
                <!--== End Product Category Item ==-->
            </div>

            <div class="row justify-content-between align-items-center pt-10 mt-4 section-space">
                <div class="col-sm-6">
                    <a href="blog-details.html" class="blog-next-previous">
                        <div class="thumb">
                            <span class="arrow">PREV</span>
                            <img src="{{ asset('assets/images/blog/next-previous1.webp') }}" width="93" height="80" alt="Image">
                        </div>
                        <div class="content">
                            <h4 class="title">Lorem ipsum dolor amet, consectetur adipiscing.</h4>
                            <h5 class="post-date">February 13, 2022</h5>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="blog-details.html" class="blog-next-previous blog-next">
                        <div class="thumb">
                            <span class="arrow">NEXT</span>
                            <img src="{{ asset('assets/images/blog/next-previous2.webp') }}" width="93" height="80" alt="Image">
                        </div>
                        <div class="content">
                            <h4 class="title">Lorem ipsum dolor amet, consectetur adipiscing.</h4>
                            <h5 class="post-date">February 13, 2022</h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="blog-comment-form-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h4 class="blog-comment-form-title">Comment</h4>
                        <div class="blog-comment-form-info">
                            <div class="blog-comment-form-social">
                                <span>Share:</span>
                                <a href="https://www.pinterest.com/" target="_blank" rel="noopener"><i class="fa fa-pinterest-p"></i></a>
                                <a href="https://twitter.com/" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a>
                            </div>
                            <select class="blog-comment-form-select">
                                <option selected>Short By Newest</option>
                                <option value="1">Best</option>
                                <option value="2">Newest</option>
                                <option value="3">Oldest</option>
                            </select>
                        </div>
                        <div class="blog-comment-form">
                            <img class="blog-comment-img" src="{{ asset('assets/images/blog/form1.webp') }}" width="110" height="110" alt="Image">
                            <textarea class="blog-comment-control" placeholder="type your comment"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Blog Detail Area Wrapper ==-->

    <X-public.latest-posts></X-public.latest-posts>


    <!--== Start News Letter Area Wrapper ==-->
    <section class="section-space pt-0">
        <div class="container">
            <div class="newsletter-content-wrap" data-bg-img="{{ asset('assets/images/photos/bg1.webp') }}">
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