<?= $this->extend('/Admin'); ?>          

<?= $this->section('content'); ?>

<section class="login">
    <div class="form-container">
        <form action="/kategori" method="post">
            <h2>Add Category</h2>
            <input type="text" for="nama_kategori" name="nama_kategori" id="nama_kategori" placeholder="Category Name" required=" ">
            <input type="submit" name="insert" value="Add Category" class="form-btn">
        </form>
    </div>
</section>

<?= $this->endSection('content'); ?>