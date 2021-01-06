<?= $this->extend('view_import'); ?>
<?= $this->section('isi') ?>

<div class="row">
    <div class="col">
        <form action="" method="post">
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="keyword" aria-label="Recipient's username" name="keyword">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit" name="submit">Search</button>
            </div>
            </div>
        </form>
        
    </div>
</div>
    

<table class="table">    
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Description</th>
        <th></th>
        <th></th>
    </tr>
<?php foreach($post  as $p) : ?>
    <tbody>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['name'] ?></td>
            <td><?= $p['email'] ?></td>
            <td><?= $p['contact'] ?></td>
            <td><?= $p['description'] ?></td>
            <td><a href="/printcontroller/edit/<?= $p['id'] ?>"><button type="button" class="btn btn-warning">edit</button></a></td>
            <td><a href="/pdfcontroller/downloadone/<?= $p['id'] ?>"><button type="button" class="btn btn-success">download</button></a></td>
        </tr>
    </tbody>
    
<?php endforeach; ?>

</table>

 


<?= $pager->links('pg', 'page_user') ?>





<?= $this->endSection() ?>