<!-- START Widget Panel -->
<div class="widget panel">
    <!-- panel body -->
    <div class="panel-body">
        <ul class="list-table">
            <li style="width:70px;">
                <img class="img-rounded" src="/image/background/400x400/background12.jpg" alt="" width="65px" height="65px">
            </li>
            <li class="text-left">
                <h5 class="semibold ellipsis nm">Lamb Of Chop</h5>
                <p class="text-muted nm">3 Song in playlist</p>
            </li>
        </ul>
    </div>
    <!--/ panel body -->
    <table class="table table-hover">
        <tbody>
        @for ($i = 1; $i <= 3; $i++)
            <tr>
                <td width="5%">
                    <audio controls>
                        <source src="/pf_be_woman_soon.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </td>
                <td>Girl, You’ll Be a Woman SoonGirl, You’ll Be a Woman Soon</td>
            </tr>
        @endfor
        </tbody>
    </table>
    <!-- panel footer -->
    <div class="panel-footer">
        <ul class="nav nav-section nav-justified">
            <li><a href="javascript:void(0);"><i class="ico-step-backward"></i></a></li>
            <li><a href="javascript:void(0);"><i class="ico-play3"></i></a></li>
            <li><a href="javascript:void(0);"><i class="ico-pause"></i></a></li>
            <li><a href="javascript:void(0);"><i class="ico-spinner12"></i></a></li>
            <li><a href="javascript:void(0);"><i class="ico-step-forward"></i></a></li>
        </ul>
    </div>
    <!--/ panel footer -->
</div>
<!--/ END Widget Panel -->