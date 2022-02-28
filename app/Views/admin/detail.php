<?php $this->extend("templates/index"); ?>
<?php $this->section("page-content"); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Halo</h1>
    <!-- DataTales Example -->
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4" style="padding: 1rem;">
                <img src="/template/img/<?php echo $listuser['user_img'] ?>" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">:</th>
                                <th scope="col"><?= $listuser['id']; ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Email</th>
                                <th scope="row">:</th>
                                <th scope="row"><?= $listuser['email']; ?></th>
                            </tr>
                            <tr>
                                <th scope="row">Username</th>
                                <th scope="row">:</th>
                                <th scope="row"><?= $listuser['username']; ?></th>
                            </tr>
                            <tr>
                                <th scope="row">Fullname</th>
                                <th scope="row">:</th>
                                <th scope="row"><?= $listuser['fullname']; ?></th>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <a href="/admin/datauser" class="btn btn-info">Kembali</a>
                                </th>
                                <th></th>
                                <th scope="row">
                                    <a href="/admin/delete/<?php echo $listuser['id'] ?>" class="btn btn-danger">Hapus</a>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php $this->endSection(); ?>