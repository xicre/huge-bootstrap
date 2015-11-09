<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h1>Request a password reset</h1>
        </div>
        
        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <!-- request password reset form box -->
        <form class="form-inline" method="post" action="<?php echo Config::get('URL'); ?>login/requestPasswordReset_action">
            <div class="form-group">
                <label for="user_name_or_email">Enter your username or email and you'll get a mail with instructions:</label>
                <input class="form-control" type="text" id="user_name_or_email" name="user_name_or_email" required />
            </div>
            <input class="btn btn-success" type="submit" value="Send me a password-reset mail" />
        </form>
    </div>
</div>
