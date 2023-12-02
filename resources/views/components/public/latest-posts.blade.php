    <!--== Start Blog Area Wrapper ==-->
    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Blog posts</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis</p>
                    </div>
                </div>
            </div>
            <div class="row mb-n9">
                @foreach ($posts as $post)
                    
                <div class="col-sm-6 col-lg-4 mb-8">
                    <!--== Start Blog Item ==-->
                    <div class="post-item">
                        <a href="{{route('post', $post->slug)}}" class="thumb">
                            <img src="{{ asset('storage/posts/'.$post->thumbnail) }}" width="370" height="320" alt="Image-HasTech">
                        </a>
                        <div class="content">
                            <a class="post-category" href="#">beauty</a>
                            <h4 class="title"><a href="{{route('post', $post->slug)}}">{{ $post->title }}</a></h4>
                            <ul class="meta">
                                <li class="author-info"><span>By:</span> <a href="#">Tomas De Momen</a></li>
                                <li class="post-date">February 13, 2021</li>
                            </ul>
                        </div>
                    </div>
                    <!--== End Blog Item ==-->
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--== End Blog Area Wrapper ==-->