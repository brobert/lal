<p class="meta mb15">
    <a href="javascript:void(0);">{{$post->created_at->format('M d, Y')}}</a><!-- date -->
    <span class="text-muted mr5 ml5">&#8226;</span>
    <span class="text-muted">In </span><a href="{{route('page.blog',['grid', 'category' => $post->category->id])}}">{{$post->category->name}}</a><!-- category -->
    <span class="text-muted mr5 ml5">&#8226;</span>
    <span class="text-muted">By </span><a href="javascript:void(0);">{{$post->author->name}}</a><!-- author -->
</p>
<a href="{{route('page.blog.single', $post->id )}}" class="btn btn-success">Read more&#8230;</a>