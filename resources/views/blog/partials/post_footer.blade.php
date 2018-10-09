<div class="table-layout mt15 mb0">
    <div class="col-sm-6">
        <!-- meta -->
        <p class="meta nm">
            <a href="javascript:void(0);">1 comment</a><!-- comments -->
            <span class="text-muted mr5 ml5">&#8226;</span>
            <span class="text-muted">In </span><a href="javascript:void(0);">{{$post->category->name}}</a><!-- category -->
            <span class="text-muted mr5 ml5">&#8226;</span>
            <span class="text-muted">By </span><a href="javascript:void(0);">{{$post->author->name}}</a><!-- author -->
        </p>
        <!--/ meta -->
    </div>
    <div class="col-sm-6">
        <a href="{{route('page.blog.single', $post->id )}}" class="btn btn-success pull-right">Read more&#8230;</a>
    </div>
</div>