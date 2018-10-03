
<form class="panel form-horizontal form-bordered" name="form-password">
    <div class="panel-body pt0 pb0">
        <div class="form-group header bgcolor-default">
            <div class="col-md-12">
                <h4 class="semibold text-primary mt0 mb5">Password</h4>
                <p class="text-default nm">Change your password or recover your current one.</p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Current password</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="currentpass">
                <p class="help-block"><a href="javascript:void(0);">Forgot password?</a></p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">New password</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="newpass">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Verify password</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="verifypass">
            </div>
        </div>
    </div>
    <div class="panel-footer">
        @include('partials/form_footer')
    </div>
</form>
<!--/ form password -->
