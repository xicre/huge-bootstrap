<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h1>LoginController/showProfile</h1>
        </div>
        
        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>
        
        <div class="col-md-6 col-md-offset-3">
             <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <?php if (Config::get('USE_GRAVATAR')) { ?>
                            <img class="img-responsive" src='<?= $this->user_gravatar_image_url; ?>' />
                        <?php } else { ?>
                            <img class="img-responsive" src='<?= $this->user_avatar_file; ?>' />
                        <?php } ?>
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4><?= $this->user_name; ?></h4>
                        <p><i class="glyphicon glyphicon-envelope"></i> <?= $this->user_email; ?></p>

                        <p><span class="label label-success">Account type: <?= $this->user_account_type; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>