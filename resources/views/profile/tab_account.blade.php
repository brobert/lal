<!-- form account -->
<form action="{{route('profile.store')}}" method="post" class="panel form-horizontal form-bordered" name="form-account">
    @csrf
    <input type="hidden" name="scope" value="account">
    <div class="panel-body pt0 pb0">
        <div class="form-group header bgcolor-default">
            <div class="col-md-12">
                <h4 class="semibold text-primary mt0 mb5">Account</h4>
                <p class="text-default nm">Change your basic account and language settings.</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Location</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="city" value="{{old('city', Auth::user()->city)}}">
                <p class="help-block">Where in the world are you?</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Country</label>
            <div class="col-sm-5">
                <select class="form-control" name="country_id">
                <option>Select Country...</option>
                    @foreach ($countries as $cc)
                        <option value="{{$cc->id}}" {{$user->country_id === $cc->id ? 'selected':''}}>
                         <b>{{$cc->name}}</b> [{{$cc->code}}]
                        </option>
                    @endforeach
                </select>
                <p class="help-block">Select your country. This setting is saved to this browser.</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">language</label>
            <div class="col-sm-5">
                <select class="form-control" name="language_id">
                    <option>Select Language...</option>
                    @foreach ($languages as $lang)
                        <option value="{{$lang->id}}" {{$user->language_id === $lang->id ? 'selected':''}}>
                            {{$lang->name}} [{{$lang->code}}]
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Timezone</label>
            <div class="col-sm-5">
                <select class="form-control" name="timezone_id">
                    <option>Select Timezone...</option>
                    @foreach ($timeZones as $tz)
                        <option value="{{$tz->id}}" {{$user->timezone_id === $tz->id ? 'selected':''}}>
                            {{$tz->name}} (GMT{{$tz->offset_to_CET}})
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Website</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="website" value="{{old('website', Auth::user()->website)}}">
                <p class="help-block">Have a homepage or a blog? Put the address here.</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Bio</label>
            <div class="col-sm-6">
                <textarea class="form-control" rows="3" placeholder="Describe about yourself" name="bio">{{old('bio', Auth::user()->bio)}}</textarea>
                <p class="help-block">About yourself in 160 characters or less.</p>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        @include('partials/form_footer')
    </div>
</form>
<!--/ form account -->