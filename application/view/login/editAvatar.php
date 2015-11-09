<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h1>Edit your avatar</h1>
        </div>
        
        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <h3>Upload an Avatar</h3>

        <p>
            If you still see the old picture after uploading a new one: Hard-Reload the page with F5! Your browser doesn't
            realize there's a new image as new and old one have the same filename.
        </p>

        <form action="<?php echo Config::get('URL'); ?>login/uploadAvatar_action" method="post" enctype="multipart/form-data">
            <div class="form-group"
                <label for="avatar_file">Select an avatar image from your hard-disk (will be scaled to 44x44 px, only .jpg currently):</label>
                <input type="file" id="avatar_file" name="avatar_file" required />
                <!-- max size 5 MB (as many people directly upload high res pictures from their digital cameras) -->
            </div>
            <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
            <input class="btn btn-primary" type="submit" value="Upload image" />
        </form>
        
        <h3>Delete your avatar</h3>
        <p>Click this link to delete your (local) avatar: <a class="btn btn-danger" href="<?php echo Config::get('URL'); ?>login/deleteAvatar_action">Delete your avatar</a>
        
    </div>
</div>
