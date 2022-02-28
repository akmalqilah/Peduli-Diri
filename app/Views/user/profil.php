<?php $this->extend("templates/index"); ?>
<?php $this->section("page-content"); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Profil</h1>

    <!-- DataTales Example -->
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4" style="padding: 1rem;">
                <img src="/template/img/<?= user()->user_img; ?>" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Username</th>
                                <th scope="col">:</th>
                                <th scope="col"><?= user()->username; ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Email</th>
                                <th scope="row">:</th>
                                <th scope="row"><?= user()->email; ?></th>
                            </tr>
                            <tr>
                                <th scope="row">Created</th>
                                <th scope="row">:</th>
                                <th scope="row"><?= user()->created_at; ?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="card mb-3" style="max-width: 800px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="/template/img/<?= user()->user_img; ?>" alt="lol" style="max-width: 100%;" class="card-img-top">
            </div>
            <di9v class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </di9v>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
    </div> -->


</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->
<?php $this->endSection(); ?>