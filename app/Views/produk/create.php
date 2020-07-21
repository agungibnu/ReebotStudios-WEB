<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">

            <h2 class="my-3"> Form Tambah Data Produk</h2>


            <form action="/produk/save" method="post">
                <?= csrf_field(); ?>

                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="bahankaos" class="col-sm-2 col-form-label">Bahan Kaos</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="bahankaos" name="bahankaos">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="bahansablon" class="col-sm-2 col-form-label">Bahan Sablon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="bahansablon" name="bahansablon">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sampul" name="sampul">
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>


            </form>



        </div>
    </div>
</div>

<?= $this->endSection(); ?>