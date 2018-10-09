@inject('tags', 'App\Models\BlogTag')

<div class="row">
    <div class="col-xs-12">
        <h5 class="semibold mt0 text-primary">Tags</h5>
        <div class="btn-tag">
            @foreach($tags->getTop(30) as $tag)
                <a href="{{route('page.blog',[$path, 'tag' => $tag->id])}}" class="btn btn-default btn-sm">{{$tag->name}}</a>
            @endforeach
        </div>
    </div>
</div>
