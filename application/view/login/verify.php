<div class="container">
    <div class="jumbotron">
        <h1>Verification</h1>
        
        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <a class="btn btn-success text-center" href="<?php echo Config::get('URL'); ?>">Go back to home page</a>
    </div>
</div>
