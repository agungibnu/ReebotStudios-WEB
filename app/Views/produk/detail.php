<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">

            <h2 class="mt-2">Detail Produk</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">

                        <!-- dari video 8 -->
                        <img src="/img/produk/<?= $produk['sampul']; ?>" class="card-img" alt="...">

                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $produk['judul']; ?></h5>
                            <p class="card-text"><b>Bahan Kaos : </b><?= $produk['bahankaos']; ?></p>
                            <p class="card-text"><b>Bahan Sablon : </b><?= $produk['bahansablon']; ?></p>

                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                            <br><br>
                            <a href="/produk" class="btn btn-primary">Kembali Ke Daftar Produk</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>