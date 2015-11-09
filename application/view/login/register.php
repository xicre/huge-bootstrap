<div class="row">
    <div class="col-md-12"

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>
    
    </div>
    <!-- login box on left side -->
    <div class="col-md-6 col-md-offset-3 well text-center">
        <h2>Register a new account</h2>

        <!-- register form -->
        <form method="post" action="<?php echo Config::get('URL'); ?>login/register_action">
            <!-- the user name input field uses a HTML5 pattern check -->
            <div class="form-group">
                <input class="form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" placeholder="Username (letters/numbers, 2-64 chars)" required />
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="user_email" placeholder="email address (a real address)" required />
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="user_password_new" pattern=".{6,}" placeholder="Password (6+ characters)" required autocomplete="off" />
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="user_password_repeat" pattern=".{6,}" required placeholder="Repeat your password" autocomplete="off" />
            </div>
            <!-- show the captcha by calling the login/showCaptcha-method in the src attribute of the img tag -->
            <div class="col-md-6 col-md-offset-3">
                <img class="img-responsive" id="captcha" src="<?php echo Config::get('URL'); ?>login/showCaptcha" />
                  <!-- quick & dirty captcha reloader -->
                  <a href="#" onclick="document.getElementById('captcha').src = '<?php echo Config::get('URL'); ?>login/showCaptcha?' + Math.random(); return false">Reload Captcha</a>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="captcha" placeholder="Please enter above characters" required />
            </div>

            <input class="btn btn-success" type="submit" value="Register" />
        </form>
    </div>
    <div class="col-md-12">
        <p>
            Please note: This captcha will be generated when the img tag requests the captcha-generation
            (= a real image) from YOURURL/login/showcaptcha. As this is a client-side triggered request, a
            $_SESSION["captcha"] dump will not show the captcha characters. The captcha generation
            happens AFTER the request that generates THIS page has been finished.
        </p>
    </div>
</div>

