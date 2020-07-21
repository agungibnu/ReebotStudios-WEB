<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="col">

        <h1 class="mt-5">Daftar Produk</h1>
        <!-- video 9 -->
        <a href="/produk/create" class="btn btn-primary mb-3">Tambah Data Produk</a>
        <div class="row">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1; ?>
                    <!-- Buat Looping -->
                    <?php foreach ($produk as $p) :  ?>

                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/Produk/<?= $p['sampul']; ?>" class="sampul" alt=""></td>
                            <td><?= $p['judul']; ?></td>

                            <!-- video 8 -->
                            <td><a href="/produk/<?= $p['slug']; ?>" class="btn btn-success">Detail</a></td>
                        </tr>

                    <?php endforeach; ?>


                </tbody>
            </table>



        </div>
    </div>
</div>
<?= $this->endSection(); ?>