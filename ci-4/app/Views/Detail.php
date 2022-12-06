<?= $this->extend('/Admin'); ?>          

<?= $this->section('content'); ?>

<section class="dashboard">
    <div class="content">
        <h2 class="product-category">Detail Order</h2>
        <form action="/detail/" method="post">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Nama Pesanan</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Cart as $key => $value) : ?>
                        <tr>
                            <td><img src="assets/img/<?=$value->img_brg?>" style="width: 250px;"></td>
                            <td><?= $value->nama_brg ?></td>
                            <td><?= $value->harga_brg ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </form>
    </div>    
</section>

<?= $this->endSection('content'); ?>