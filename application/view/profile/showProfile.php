<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h1>ProfileController/showProfile/:id</h1>
        </div>        

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <h3>What happens here ?</h3>
        <p>This controller/action/view shows all public information about a certain user.</p>

        <?php if ($this->user) { ?>
            <table class="table text-center">
                <thead>
                <tr>
                    <td>Id</td>
                    <td>Avatar</td>
                    <td>Username</td>
                    <td>User's email</td>
                    <td>Activated ?</td>
                </tr>
                </thead>
                <tbody>
                    <tr class="<?= ($this->user->user_active == 0 ? 'inactive' : 'active'); ?>">
                        <td><?= $this->user->user_id; ?></td>
                        <td class="avatar">
                            <?php if (isset($this->user->user_avatar_link)) { ?>
                                <img class="img-responsive" src="<?= $this->user->user_avatar_link; ?>" />
                            <?php } ?>
                        </td>
                        <td><?= $this->user->user_name; ?></td>
                        <td><?= $this->user->user_email; ?></td>
                        <td><?= ($this->user->user_active == 0 ? 'No' : 'Yes'); ?></td>
                    </tr>
                </tbody>
            </table>
        <?php } ?>
    </div>
</div>
