<?= $this->extend('view_import'); ?>
<?= $this->section('isi') ?>

    
        <div class="col-md-8 offset-md-2">
            <form method="post">
                <div class="form-group">
                    <label for="">Name</label>
                    <input id="" class="form-control" type="text" name="name" value="<?= $post['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input id="" class="form-control" type="text" name="email" value="<?= $post['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Contact</label>
                    <input id="" class="form-control" type="text" name="contact" value="<?= $post['contact'] ?>">
                </div>      
                                  
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea id="" class="form-control" name="description" rows="5"><?= $post['description'] ?></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-success btn-sm">Update</button>
                </div>
                
              
            </form>
        
        </div>

    

    <?= $this->endSection() ?>