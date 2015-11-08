<div class="row">
    <div class="col-md-12">

        <div class="page-header">
            <h1>Admin/index</h1>
        </div>
        
        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>
        
        <h3>What happens here ?</h3>
        <p>This controller/action/view shows a list of all users in the system. with the ability to soft delete a user
            or suspend a user.</p>
        
        <table class="table text-center">
            <thead>
            <tr>
                <td>Id</td>
                <td>Avatar</td>
                <td>Username</td>
                <td>User's email</td>
                <td>Activated ?</td>
                <td>Link to user's profile</td>
                <td>suspension Time in days</td>
                <td>Soft delete</td>
                <td>Submit</td>
            </tr>
            </thead>
            <?php foreach ($this->users as $user) { ?>
                <tr class="<?= ($user->user_active == 0 ? 'inactive' : 'active'); ?>">
                    <td><?= $user->user_id; ?></td>
                    <td class="avatar">
                        <?php if (isset($user->user_avatar_link)) { ?>
                        <img class="img-responsive" src="<?= $user->user_avatar_link; ?>"/>
                        <?php } ?>
                    </td>
                    <td><?= $user->user_name; ?></td>
                    <td><?= $user->user_email; ?></td>
                    <td><?= ($user->user_active == 0 ? 'No' : 'Yes'); ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?= Config::get('URL') . 'profile/showProfile/' . $user->user_id; ?>">Profile</a>
                    </td>
                    <form action="<?= config::get("URL"); ?>admin/actionAccountSettings" method="post">
                        <td><input type="number" name="suspension" /></td>
                        <td><input type="checkbox" name="softDelete" <?php if ($user->user_deleted) { ?> checked <?php } ?> /></td>
                        <td>
                            <input type="hidden" name="user_id" value="<?= $user->user_id; ?>" />
                            <input class="btn btn-success" type="submit" />
                        </td>
                    </form>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
