<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h1>LoginController/editUserEmail</h1>
        </div>

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <h2>Change your email address</h2>

        <form class="form-inline" action="<?php echo Config::get('URL'); ?>login/editUserEmail_action" method="post">
            <div class="form-group">
                <label for="user_email">New email address:</label>
                <input type="text" id="user_email" name="user_email" required />
            </div>
            <input class="btn btn-primary" type="submit" value="Submit" />
        </form>
    </div>
</div>
    
