@inject('categories', 'App\Models\BlogCategory')

<div class="row">
    <div class="col-xs-12">
        <h5 class="semibold mt0 text-primary">Categories</h5>
        <div class="list-group">
            @foreach($categories->getTop() as $category)
                <a href="{{route('page.blog',[$path, 'category' => $category->id])}}" class="list-group-item">
                    <i class="ico-angle-right mr5"></i> {{$category->name}}
                </a>
            @endforeach
        </div>
    </div>
</div>