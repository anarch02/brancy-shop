@extends('layouts.app')

@section('content')
    <!--== Start Page Header Area Wrapper ==-->
    <nav aria-label="breadcrumb" class="breadcrumb-style1 mb-10" style="margin-top: 120px">
        <div class="container">
            <ol class="breadcrumb justify-content-center">
                {{-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> --}}
                <li class="breadcrumb-item" aria-current="page">Blog</li>
            </ol>
        </div>
    </nav>

    <!--== Start Blog Area Wrapper ==-->
    <section class="section-space pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="row">
                        @foreach ($posts as $post)
                            <x-public.post :slug="$post->slug" :title="$post->title" :image="$post->thumbnail" />
                        @endforeach

                        {{ $posts->links()}}
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