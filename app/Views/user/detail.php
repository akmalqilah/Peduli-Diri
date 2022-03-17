<?php $this->extend('/templates/index'); ?>
<?php $this->section("page-content"); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Halo</h1>
    <!-- DataTales Example -->
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="card-body">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">:</th>
                                <th scope="col"><?= $listuser['id_catatan']; ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">user_id</th>
                                <th scope="row">:</th>
                                <th scope="row"><?= $listuser['user_id']; ?></th>
                            </tr>
                            <tr>
                                <th scope="row">tanggal</th>
                                <th scope="row">:</th>
                                <th scope="row"><?= $listuser['tanggal']; ?></th>
                            </tr>
                            <tr>
                                <th scope="row">waktu</th>
                                <th scope="row">:</th>
                                <th scope="row"><?= $listuser['waktu']; ?></th>
                            </tr>
                            <tr>
                                <th scope="row">lokasi</th>
                                <th scope="row">:</th>
                                <th scope="row"><?= $listuser['lokasi']; ?></th>
                            </tr>
                            <tr>
                                <th scope="row">suhu</th>
                                <th scope="row">:</th>
                                <th scope="row"><?= $listuser['suhu']; ?></th>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <a href="/user/catatan/<?= user()->id; ?>" class="btn btn-info">Kembali</a>
                                </th>
                                <th scope="row">
                                    <a href="/user/delete/<?php echo $listuser['id_catatan'] ?>" class="btn btn-danger">Hapus</a>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>