<?= $this->extend('/Admin'); ?>          

<?= $this->section('content'); ?>

<section class="login">
    <div class="form-container">
        <form action="/save" method="post">
            <?=csrf_field() ?>
            <h2>Add Product</h2>
            <input type="text" for="nama_brg" name="nama_brg" id="nama_brg" placeholder="Product Name" required=" ">
            <input type="text" for="nama_artis" name="nama_artis" id="nama_artis" placeholder="Artist Name" required=" ">
            <input type="text" for="harga_brg" name="harga_brg" id="harga_brg" placeholder="Product Price" required=" ">
            <input type="text" for="stok_brg" name="stok_brg" id="stok_brg" placeholder="Product Stock" required=" ">
            <input type="file" for="img_brg" name="img_brg" id="img_brg" placeholder="Product Image" required=" ">
            <div>
                <select name="id_kategori" class="form-control" required>
                    <option value="" hidden>-- Choose Product Category</option>
                    <?php foreach ($Kategori as $key => $value) : ?>
                        <option value="<?=$value['id_kategori'];?>"><?=$value['nama_kategori'];?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <input type="submit" name="insert" value="Add Product" class="form-btn">
        </form>
    </div>
</section>

<?= $this->endSection('content'); ?>