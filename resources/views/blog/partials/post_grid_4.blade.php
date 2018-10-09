<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 post">
    <article class="panel overflow-hidden">
        <!-- Iframe container -->
        <div class="iframe-container">
            <iframe src="//player.vimeo.com/video/7449107" webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder="0"></iframe>
        </div>
        <!--/ Iframe container -->

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