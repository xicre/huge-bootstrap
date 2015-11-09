<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h1>NoteController/index</h1>
        </div>
        
        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>

        <h3>What happens here ?</h3>
        <p>This is just a simple CRUD implementation. Creating, reading, updating and deleting things.</p>
        
        <form class="form-inline" method="post" action="<?php echo Config::get('URL');?>note/create">
            <div class="form-group">
                <label for="note_text">Text of new note: </label>
                <input type="text" class="form-control" name="note_text" id="note_text" />
            </div>
            <input class="btn btn-default" type="submit" value='Create this note' autocomplete="off" />
        </form>

        <?php if ($this->notes) { ?>
            <table class="table text-center">
                <thead>
                <tr>
                    <td>Id</td>
                    <td>Note</td>
                    <td>EDIT</td>
                    <td>DELETE</td>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($this->notes as $key => $value) { ?>
                        <tr>
                            <td><?= $value->note_id; ?></td>
                            <td><?= htmlentities($value->note_text); ?></td>
                            <td><a class="btn btn-primary" href="<?= Config::get('URL') . 'note/edit/' . $value->note_id; ?>">Edit</a></td>
                            <td><a class="btn btn-danger" href="<?= Config::get('URL') . 'note/delete/' . $value->note_id; ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
        <p class="text-center">No notes yet. Create some !</p>
        <?php } ?>
    </div>
</div>
