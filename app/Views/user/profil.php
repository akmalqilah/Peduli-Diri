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
                <img src="/template/img/<?= user()->user_img; ?>" alt="..." class="card-img">
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
                            <tr>
                                <th scope="col">Fullname</th>
                                <th scope="col">:</th>
                                <th scope="col"><?= user()->fullname; ?></th>
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
</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->
<?php $this->endSection(); ?>