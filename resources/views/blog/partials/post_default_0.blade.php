<div class="row">
    <div class="col-xs-12">
        <article class="panel overflow-hidden">
            <!-- Content -->
            <section class="panel-body">
                <div class="row">
                    <!-- post date -->
                    @include('blog.partials.post_date')
                    <!--/ post date -->

                    <!-- post content -->
                    <div class="col-xs-9 col-sm-11 col-md-11">
                        <!-- heading -->
                        <h4 class="thin mt0"><a href="{{route('page.blog.single', $post->id )}}" class="text-default">{{$post->title}}</a></h4>
                        <!--/ heading -->

                        <!-- text -->
                        <div class="text-default">
                            {{$post->content}}
                        </div>
                        <!--/ text -->

                        <!-- Meta & button -->
                        @include('blog.partials.post_footer')
                        <!-- Meta & button -->
                    </div>
                    <!--/ post content -->
                </div>
            </section>
            <!--/ Content -->
        </article>
    </div>
</div>