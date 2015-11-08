<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h1>LoginController/changePassword</h1>
        </div>

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <div class="row">
            <div class="col-md-6 col-md-offset-3 well">
                <h2>Set new password</h2>

                <!-- new password form box -->
                <form method="post" action="<?php echo Config::get('URL'); ?>login/changePassword_action" name="new_password_form">
                    <div class="form-group">
                        <label for="change_input_password_current">Enter Current Password:</label>
                        <input id="change_input_password_current" class="form-control" type='password' 
                               name='user_password_current' pattern=".{6,}" required autocomplete="off"  />
                    </div>
                    <div class="form-group">
                        <label for="change_input_password_new">New password (min. 6 characters)</label>
                        <input id="change_input_password_new" class="form-control" type="password"
                               name="user_password_new" pattern=".{6,}" required autocomplete="off" />
                    </div>
                    <div class="form-group">
                        <label for="change_input_password_repeat">Repeat new password</label>
                        <input id="change_input_password_repeat" class="form-control" type="password"
                               name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
                    </div>
                    <input type="submit"  name="submit_new_password" value="Submit new password" class="btn btn-default"/>
                </form>
            </div>
        </div>
    </div>
</div>
