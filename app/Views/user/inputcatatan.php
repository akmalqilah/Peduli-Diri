<?php $this->extend("templates/index"); ?>
<?php $this->section("page-content"); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?php if (in_groups('user')) : ?>
        <h1 class="h3 mb-2 text-gray-800">Input Catatan</h1>
    <?php endif; ?>
    <p class="mb-4">Isi Data catatan perjalanan</p>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form class="user" action="/user/save" method="post">
                <?php csrf_field(); ?>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Id</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-user" id="user_id" value="<?= user()->id; ?>" name="userid" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control form-control-user" id="tanggal" name="tanggal" autofocus require>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">waktu</label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control form-control-user" id="waktu" name="waktu" require>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">lokasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-user" id="lokasi" name="lokasi" require>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">suhu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-user" id="suhu" name="suhu" require>
                    </div>
                </div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php $this->endSection(); ?>