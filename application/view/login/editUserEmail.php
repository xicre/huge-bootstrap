<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h1>LoginController/editUserEmail</h1>
        </div>

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <div class="box">
            <h2>Change your email address</h2>

            <form action="<?php echo Config::get('URL'); ?>login/editUserEmail_action" method="post">
                <label>
                    New email address: <input type="text" name="user_email" required />
                </label>
                <input type="submit" value="Submit" />
            </form>
        </div>
    </div>
</div>
    
