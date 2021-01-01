<?= $this->extend('view_import'); ?>
<?= $this->section('isi') ?>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h5>Import Data</h5>
<?= form_open_multipart('import/upload') ?>
        <?php
            $session = \Config\Services::session();
            if(!empty($session->getFlashdata('dta'))){
                echo '<div class="alert alert-danger" role="alert">
                    '. $session->getFlashdata('dta').'
                </div>';
            }

            if(!empty($session->getFlashdata('success'))){
                echo '<div class="alert alert-success" role="alert">
                    '. $session->getFlashdata('success').'
                </div>';
            }

        ?>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Import Exel</label>
                <div class="col-sm-4">
                    <input type="file" name="fileimport" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-4">
                    <button type="submit"  class="btn btn-success">Import Data</button>
                </div>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
