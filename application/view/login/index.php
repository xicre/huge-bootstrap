<div class="row">
    <div class="col-md-12">
        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>
    </div>
    <div class="row">
        <div class="col-xs-6">
            <div class="well">
                <form action="<?php echo Config::get('URL'); ?>login/login" method="post">
                    
                    
                    
                    <div class="form-group">
                        <label for="user_name">Username</label>
                        <input class="form-control" type="text" name="user_name" id="user_name" placeholder="Username or email" required />
                    </div>
                    <div class="form-group">
                        <label for="user_password" >Password</label>
                        <input class="form-control" type="password" id="user_password" name="user_password" placeholder="Password" required />
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="set_remember_me_cookie" class="remember-me-checkbox" />
                            Remember me for 2 weeks
                        </label>
                    </div>
                    <!-- when a user navigates to a page that's only accessible for logged a logged-in user, then
                         the user is sent to this page here, also having the page he/she came from in the URL parameter
                         (have a look). This "where did you came from" value is put into this form to sent the user back
                         there after being logged in successfully.
                         Simple but powerful feature, big thanks to @tysonlist. -->
                    <?php if (!empty($this->redirect)) { ?>
                        <input type="hidden" name="redirect" value="<?php echo $this->redirect ?>" />
                    <?php } ?>
                    <!-- 
                            set CSRF token in login form, although sending fake login requests mightn't be interesting gap here.
                            If you want to get deeper, check these answers:
                                    1. natevw's http://stackoverflow.com/questions/6412813/do-login-forms-need-tokens-against-csrf-attacks?rq=1
                                    2. http://stackoverflow.com/questions/15602473/is-csrf-protection-necessary-on-a-sign-up-form?lq=1
                                    3. http://stackoverflow.com/questions/13667437/how-to-add-csrf-token-to-login-form?lq=1
                    -->
                    <input type="hidden" name="csrf_token" value="<?= Csrf::makeToken(); ?>" />
                    <input type="submit" class="btn btn-success btn-block" value="Log in"/>
                </form>
                <a class="btn btn-default btn-block" href="<?php echo Config::get('URL'); ?>login/requestPasswordReset">I forgot my password</a>
            </div>
        </div>
        <div class="col-xs-6">
            <p class="lead">Register now for <span class="text-success">FREE</span></p>
            <ul class="list-unstyled" style="line-height: 2">
                <li><span class="glyphicon glyphicon-ok text-success"></span> See all your orders</li>
                <li><span class="glyphicon glyphicon-ok text-success"></span> Fast re-order</li>
                <li><span class="glyphicon glyphicon-ok text-success"></span> Save your favorites</li>
                <li><span class="glyphicon glyphicon-ok text-success"></span> Fast checkout</li>
                <li><span class="glyphicon glyphicon-ok text-success"></span> Get a gift <small>(only new customers)</small></li>
            </ul>
            <p><a class="btn btn-info btn-block" href="<?php echo Config::get('URL'); ?>login/register">Register</a></p>
        </div>
    </div>
</div>
