<?php $this->extend("templates/index"); ?>
<?php $this->section("page-content"); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Profil</h1>

    <!-- DataTales Example -->
    <div class="card mb-3" style="max-width: 100%;">
        <div class="row no-gutters">
            <!-- <div class="col-md-4" style="padding: 1rem;">
            </div> -->
            <div class="col">
                <div class="card-body">
                    <form action="/user/editproses/<?php echo $listuser['id'] ?>">
                        <div class="form-group">
                            <label for="iduser">Id User</label>
                            <input type="iduser" class="form-control" name="iduser" value="<?php echo $listuser['id']; ?>" id="iduser" aria-describedby="idHelp" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $listuser['email']; ?>" id="email" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="username">username</label>
                            <input type="username" class="form-control" name="username" value="<?php echo $listuser['username']; ?>" id="username" aria-describedby="usernameHelp">
                        </div>
                        <div class="form-group">
                            <label for="fullname">fullname</label>
                            <input type="fullname" class="form-control" name="fullname" value="<?php echo $listuser['fullname']; ?>" id="fullname" aria-describedby="fullnameHelp">
                        </div>
                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="text" class="form-control" name="password" value="<?php echo $listuser['password_hash']; ?>" id="password" aria-describedby="passwordHelp">
                        </div>
                        <div class="form-group">
                            <div class="row mb-3">
                                <img src="/template/img/<?= $listuser['user_img']; ?>" class="img-thumbnail img-preview">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="user_img"><?= $listuser['user_img']; ?></label>
                                    <input type="file" value="<?= $listuser['user_img']; ?>" class="form-control" id="user_img" name="user_img" onchange="previewImg()">
                                </div>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <table class="table table-borderless">
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
        </tr> -->
<?php $this->endSection(); ?>