<div class="widget panel bgcolor-warning">
    <!-- panel body -->
    <div class="panel-body">
        <div class="clearfix">
            <p class="pull-left semibold">{{$data['city']}}, {{$data['countryCode']}}</p>
            <p class="pull-right semibold">
                <span class="mr5">°F</span>
                <span>°C</span>
            </p>
        </div>
        <div class="text-center mt15 mb15">
            <h1 class="semibold">
                <i class="ico-sun22"></i>
                <span class="">{{$data['temp']}}°</span>
            </h1>
        </div>
        <div class="clearfix">
            <p class="pull-left semibold nm">
                <i class="ico-arrow-down5"></i> {{$data['temp_min']}}°
            </p>
            <p class="pull-right semibold nm">
                <i class="ico-arrow-up5"></i> {{$data['temp_max']}}°
            </p>
        </div>
    </div>
    <!--/ panel body -->
</div>