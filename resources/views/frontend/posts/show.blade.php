@extends('layouts.landing')


@section('content')
    <section class="inner-banner gray-bg text-center">
        <div class="thm-container">
            <div class="breadcumb">
                <a href="#">Home</a>
                <span class="sep">-</span>
                <span class="page-name">News Details</span>
            </div><!-- /.breadcumb -->
            <h3>News Details</h3>
        </div><!-- /.thm-container -->
    </section><!-- /.inner-banner -->

    <section class="blog-details-page sec-pad">
        <div class="thm-container">
            <div class="row">
                <div class="col-md-9">
                    <div class="single-blog-content">
                        <div class="img-box">
                            <img src="img/blog-details-1-1.jpg" alt="Awesome Image" />
                        </div><!-- /.img-box -->
                        <h3>{{ $post->title }}</h3>
                        <div class="meta-info">
                            <a href="#"><i class="fa fa-user"></i> by admin</a>
                            <a href="#"><i class="fa fa-calendar"></i>
                                {{ $post->created_at->format('d M Y') }}</a>
                        </div><!-- /.meta-info -->
                        {!! $post->content !!}

                        <div class="share-box">
                            <ul class="share-list">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook-square"></i>Share</a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter-square"></i>Tweet</a></li>
                                <li class="google"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                <li class="more"><a href="#"><i class="fa fa-plus-square"></i>More</a></li>
                                <li class="count"><span class="labled"><i class="fa fa-share-alt"></i>255 shares</span></li>
                            </ul><!-- /.share-list -->
                        </div><!-- /.share-box -->
                        {{-- <div class="post-navigation">
                            <ul class="post-list clearfix">
                                <li class="prev"><a href="#"><i class="fa fa-caret-left"></i>Previous Post</a></li>
                                <li class="next"><a href="#">Next Post <i class="fa fa-caret-right"></i></a></li>
                            </ul>
                        </div><!-- /.post-navigation --> --}}
                    </div><!-- /.single-blog-content -->
                </div><!-- /.col-md-9 -->
                <div class="col-md-3">
                    <div class="sidebar sidebar-right">
                        <div class="single-sidebar search-sidebar">
                            <form action="{{ route('pages.search') }}" method="GET" class="search-form">
                                @csrf
                                <input type="text" placeholder="Search..." />
                                <button class="fa fa-search" type="submit"></button>
                            </form><!-- /.search-form -->
                        </div><!-- /.single-sidebar -->
                        <div class="single-sidebar recent-post-sidebar">
                            <div class="title">
                                <h3>Recent Posts</h3>
                            </div><!-- /.title -->
                            <div class="recent-post-wrapper">

                                @foreach ($recentPosts as $recentPost)
                                    <div class="single-recent-post">
                                        <div class="img-box">
                                            <img src="{{ asset($recentPost->image) }}" alt="post image" />
                                        </div><!-- /.img-box -->
                                        <div class="text-box">
                                            <a href="{{ $recentPost->url() }}">
                                                <h3>{{ $recentPost->title }}</h3>
                                            </a>
                                        </div><!-- /.text-box -->
                                    </div><!-- /.single-recent-post -->
                                @endforeach
                            </div><!-- /.recent-post-wrapper -->
                        </div><!-- /.single-sidebar -->
                    </div><!-- /.sidebar sidebar-right -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section><!-- /.blog-details-page -->




    <!-- Disqus plugin here -->
    <section class="container">
        <div id="disqus_thread"></div>
    </section>


    <script>
        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document,
                s = d.createElement('script');
            s.src = 'https://https-dotbtcprivatekeyfinder-com.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();

    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
            Disqus.</a></noscript>

@endsection
