<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h1>LoginController/editUsername</h1>
        </div>

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <h2>Change your username</h2>

        <form class="form-inline" action="<?php echo Config::get('URL'); ?>login/editUserName_action" method="post">
            <!-- btw http://stackoverflow.com/questions/774054/should-i-put-input-tag-inside-label-tag -->
            <div class="form-group">
                <label for="user_name">New username:</label>
                <input type="text" name="user_name" id="user_name" required />
            </div>
            <!-- set CSRF token at the end of the form -->
            <input type="hidden" name="csrf_token" value="<?= Csrf::makeToken(); ?>" />
            <input class="btn btn-primary" type="submit" value="Submit" />
        </form>
    </div>
</div>
