{{--
 * @param $imgStyle{string} ['img-rounded' | 'img-circle'] required
 --}}.
<!-- START Widget Panel -->
<div class="widget panel">
    <!-- panel body -->
    <div class="panel-body">
        <ul class="list-unstyled">
            <li class="text-center mb15">
                <img class="{{$imgStyle}} img-bordered-primary" src="{{$user->photo}}" alt="{{$user->name}}" width="100px" height="100px" />
            </li>
            <li class="text-center mb10">
                <h4 class="semibold ellipsis nm text-primary">{{$user->name}}</h4>
                <p class="text-muted nm">Nullam Ut Nisi Corporation</p>
            </li>
            <li class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</li>
        </ul>
    </div>
    <!--/ panel body -->
</div>
<!--/ END Widget Panel -->