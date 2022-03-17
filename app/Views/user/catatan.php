<?php $this->extend('/templates/index'); ?>
<?php $this->section("page-content"); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar User</h1>

</div>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->


    <!-- DataTales Example -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">riwayat oerjalanan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Tanggal</th>
                            <th>Wakti</th>
                            <th>Lokasi</th>
                            <th>Suhu</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($query as $key => $value) : ?>
                            <tr>

                                <td><?= $key + 1 ?></td>
                                <td><?= $value->user_id ?></td>
                                <td><?= $value->tanggal ?></td>
                                <td><?= $value->waktu ?></td>
                                <td><?= $value->lokasi ?></td>
                                <td><?= $value->suhu ?></td>
                                <td><a href="/user/detail/" class="btn btn-info">Detail</a></td>
                            </tr>
                        <?php endforeach; ?>



                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<?php $this->endSection(); ?>