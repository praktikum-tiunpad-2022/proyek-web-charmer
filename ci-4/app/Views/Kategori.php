<?= $this->extend('/Admin'); ?>          
<?= $this->section('content'); ?>
<section class="dashboard">
    <div class="content">
        <h2 class="product-category">Category  <a class="btn-cart" href="/create">Add<i class="fa fa-plus"></i></a></h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($Kategori as $row) : ?>
                    <tr>
                        <td><?= $row['nama_kategori']; ?></td>
                        <td>
                            <a href="/edit_ktg/<?= $row['id_kategori']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="/delete_ktg/<?= $row['id_kategori']; ?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
<?= $this->endSection('content'); ?>