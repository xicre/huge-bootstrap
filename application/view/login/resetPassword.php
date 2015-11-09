<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h1>LoginController/resetPassword</h1>
        </div>
        
        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <div class="col-md-6 col-md-offset-3 well text-center">
            <h2>Set new password</h2>

            <p>FYI: ... Idenfitication process works via password-reset-token (hidden input field)</p>

            <!-- new password form box -->
            <form method="post" action="<?php echo Config::get('URL'); ?>login/setNewPassword" name="new_password_form">
                <input type='hidden' name='user_name' value='<?php echo $this->user_name; ?>' />
                <input type='hidden' name='user_password_reset_hash' value='<?php echo $this->user_password_reset_hash; ?>' />
                <div class="form-group">
                    <label for="reset_input_password_new">New password (min. 6 characters)</label>
                    <input class="form-control" id="reset_input_password_new" class="reset_input" type="password"
                           name="user_password_new" pattern=".{6,}" required autocomplete="off" />
                </div>
                <div class="form-group">
                    <label for="reset_input_password_repeat">Repeat new password</label>
                    <input class="form-control" id="reset_input_password_repeat" class="reset_input" type="password"
                           name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
                </div>
                <input class="btn btn-success" type="submit"  name="submit_new_password" value="Submit new password" />
            </form>
        </div>
        <a class="btn btn-primary pull-right" href="<?php echo Config::get('URL'); ?>login/index">Back to Login Page</a>
    </div>
</div>
