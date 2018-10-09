<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 post">
    <article class="panel overflow-hidden">
        <!-- Thumbnail -->
        <header class="thumbnail">
            <!-- media -->
            <div class="media">
                <!-- indicator -->
                <div class="indicator"><span class="spinner"></span></div>
                <!--/ indicator -->
                <!-- toolbar overlay -->
                <div class="overlay">
                    <div class="toolbar">
                        <a href="javascript:void(0);" class="btn btn-danger"><i class="ico-heart6"></i></a>
                    </div>
                </div>
                <!--/ toolbar overlay -->
                <img data-toggle="unveil" src="/image/background/blog/placeholder.jpg" data-src="/image/background/blog/blog5.jpg" alt="Photo" height="230px">
            </div>
            <!--/ media -->
        </header>
        <!--/ Thumbnail -->

        <!-- Content -->
        <section class="panel-body">
            <!-- heading -->
            <h4 class="thin mt0 ellipsis"><a href="javascript:void(0);" class="text-default">{{$post->title}}</a></h4>
            <!--/ heading -->

            <!-- text -->
            <div class="text-default">
                <p>{{str_limit($post->content, 400)}}</p>
            </div>
            <!--/ text -->

            <!-- Meta & button -->
                @include('blog.partials.post_grid_footer')
            <!-- Meta & button -->
        </section>
        <!--/ Content -->
    </article>
</div>