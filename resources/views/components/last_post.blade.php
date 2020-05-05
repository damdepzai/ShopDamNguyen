<div class="latest-post-area">
    <div class="container">
        <div class="area-title">
            <h2>Bài viết nổi bật</h2>
        </div>
        <div class="row">
            <div class="all-singlepost">
                @if(isset($articles))
                    @foreach($articles as $article)
                            <!-- single latestpost start -->
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-post">
                                        <div class="post-thumb">
                                            <a href="{{route('get.detail.article',[$article->a_slug,$article->id])}}">
                                                <img src="/images/products/{{$article->a_avatar}}" alt=""/>
                                            </a>
                                        </div>
                                        <div class="post-thumb-info">
                                            <div class="post-time">
                                                <a href="{{route('get.detail.article',[$article->a_slug,$article->id])}}">{{$article->a_name}}</a>
                                            </div>
                                            <div class="postexcerpt">
                                                <p>{{$article->a_description}}</p>
                                                <a href="{{route('get.detail.article',[$article->a_slug,$article->id])}}" class="read-more">Xem thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single latestpost end -->
                    @endforeach
                @endif

            </div>
        </div>
    </div>
</div>
