<?php $this->extend("templates/index"); ?>
<?php $this->section("page-content"); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Isi Data</h1>
    <p class="mb-4">Isi Data catatan perjalanan</p>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form>
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tanggal">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jam" class="col-sm-2 col-form-label">Jam</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jam">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lokasi" class="col-sm-2 col-form-label">Lokasi yang dikunjungi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lokasi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="suhutubuh" class="col-sm-2 col-form-label">Suhu Tubuh</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="suhutubuh">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <a class="btn btn-primary" href="catatan">Simpan</a>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php $this->endSection(); ?>