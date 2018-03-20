<div class="col-xs-3 col-sm-1 col-md-1 pr0">
    <div class="panel widget">
        <div class="pa10">
            <h4 class="bold nm text-primary text-center">{{$post->created_at->format('d')}}</h4>
        </div>
        <hr class="nm">
        <div class="pa10 bgcolor-default">
            <p class="semibold nm text-default text-center">{{$post->created_at->format('M')}}</p>
        </div>
    </div>
</div>