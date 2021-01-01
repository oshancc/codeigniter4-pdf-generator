<?= $this->extend('view_import'); ?>
<?= $this->section('isi') ?>

<div class="container">
    
    <div class="text-right">
    <!-- <button type="button" class="btn btn-success" onclick="javascript:window.print()">Download</button> -->
    <a href="pdfcontroller/download"><button type="button" class="btn btn-success">Download</button></a>
    </div>

    <div>
    
        <?php foreach($post as $p) : ?>
        
        <?= $p['name'] ?><br><br>   
        <?= $p['email'] ?><br><br>     
        <?= $p['contact'] ?><br><br>       
        <?= $p['description'] ?><br><br>      
        <?php endforeach; ?>       
    
    </div>   
</div>


<?= $this->endSection() ?>