<div id="myModal modal-default" class="modal ajax-form-model fade">
    <div class="modal-dialog modal-login" style="width: 400px;">
        <div class="modal-content">
            <div class="modal-header">
                {{--<div class="avatar">--}}
                    {{--<img src="{{asset('/img/default.png')}}" alt="Avatar">--}}
                {{--</div>--}}
                <h4 class="modal-title text-center" style="color:white">Member Login</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>

<div id="myModal registration" class="modal ajax-registration-model fade">
    <div class="modal-dialog modal-login" style="width: 400px;">
        <div class="modal-content">
            <div class="modal-header">
                {{--<div class="avatar">--}}
                {{--<img src="{{asset('/img/default.png')}}" alt="Avatar">--}}
                {{--</div>--}}
                <h4 class="modal-title text-center" style="color:white">Registration</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>