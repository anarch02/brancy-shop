<div class="col-sm-6 col-lg-4 col-xl-6 mb-8">
    <!--== Start Blog Item ==-->
    <div class="post-item">
        <a href="{{route('post', $slug)}}" class="thumb">
            <img src="/storage/posts/{{ $image }}" width="370" height="320" alt="Image-HasTech">
        </a>
        <div class="content">
            <a class="post-category" href="blog.html">beauty</a>
            <h4 class="title"><a href="{{route('post', $slug)}}">{{ $title }}</a></h4>
            <ul class="meta">
                <li class="author-info"><span>By:</span> <a href="blog.html">Tomas De Momen</a></li>
                <li class="post-date">February 13, 2021</li>
            </ul>
        </div>
    </div>
    <!--== End Blog Item ==-->
</div>