<?= $this->extend('/Admin'); ?>          

<?= $this->section('content'); ?>

<section class="login">
    <div class="form-container">
        <form action="/edit_ktg/<?= $Kategori['id_kategori'] ?>" method="post">
            <h2>Add Category</h2>
            <input type="text" name="nama_kategori" id="nama_kategori" value="<?=$Kategori['nama_kategori'];?>" placeholder="Category Name" required=" ">
            <input type="submit" name="update" value="Edit Category" class="form-btn">
        </form>
    </div>
</section>

<?= $this->endSection('content'); ?>