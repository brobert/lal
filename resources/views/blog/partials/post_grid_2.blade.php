<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 post">
    <article class="panel overflow-hidden">
        <!-- Owl Carousel -->
        <header id="carousel2" class="owl-carousel">
            <div class="image"><img src="/image/background/blog/blog2.jpg" height="260px"></div>
            <div class="image"><img src="/image/background/blog/blog3.jpg" height="260px"></div>
            <div class="image"><img src="/image/background/blog/blog4.jpg" height="260px"></div>
        </header>
        <!--/ Owl Carousel -->

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