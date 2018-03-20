<li>
    <div class="section">
        <h4 class="bold text-default mt0 mb5" data-toggle="counterup">
            @fnum($data['value'], 0)
        </h4>
        <p class="nm text-muted">
            <span class="semibold">@lang($data['name'])</span>
            <span class="text-muted mr5 ml5">•</span>
            <span class="text-{{$data['percent'] < 0 ? 'danger' : 'success'}}">
                <i class="ico-arrow-{{$data['percent'] < 0 ? 'down' : 'up'}}4"></i>
                 @fnum($data['percent'], 1)%
            </span>
        </p>
    </div>
</li>