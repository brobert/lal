<!-- form profile -->
<form action="{{route('profile.store')}}" method="post" class="panel form-horizontal form-bordered" name="form-profile">
    @csrf
    <input type="hidden" name="scope" value="profile">
    <div class="panel-body pt0 pb0">
        <div class="form-group header bgcolor-default">
            <div class="col-md-12">
                <h4 class="semibold text-primary mt0 mb5">Profile</h4>
                <p class="text-default nm">This information appears on your public profile, search results, and beyond.</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Photo</label>
            <div class="col-sm-9">
                <div class="btn-group pr5">
                    <img class="img-circle img-bordered" src="{{$user->photo}}" alt="{{$user->name}}" width="34px">
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-default">Change photo</button>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Upload photo</a></li>
                        <li><a href="#">Remove</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="name" value="{{old('name', Auth::user()->name)}}">
                <p class="help-block">Enter your real name.</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Email</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="email" value="{{old('email', Auth::user()->email)}}">
                <p class="help-block">Email will not be publicly displayed. <a href="javascript:void(0);">Learn more.</a></p>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        @include('partials/form_footer')
    </div>
</form>
<!--/ form profile -->
