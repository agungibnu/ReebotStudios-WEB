<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">

    <div class="container">
        <div class="row justify-content-center">
            <!-- <div class="col-10 daftar-panel"> -->
            <div class="row">
                <div class="col-lg ">
                    <h4>Form Daftar</h4>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-check">

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>
</div>
<!-- endJumbotron -->

<?= $this->endSection(); ?>