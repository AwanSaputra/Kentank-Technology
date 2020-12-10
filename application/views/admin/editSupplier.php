<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header text-center">
                    Form Ubah Data Supplier
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $supplier['id'] ?>">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $supplier['name']; ?>">
                            <small class="form-text text-danger"><?= form_error('name') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="expertise">kontak</label>
                            <input type="text" class="form-control" id="kontak" name="kontak" value="<?= $supplier['kontak']; ?>">
                            <small class="form-text text-danger"><?= form_error('kontak') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">profile</label>
                            <input type="text" class="form-control" id="profile" name="profile" value="<?= $supplier['profile']; ?>">
                            <small class="form-text text-danger"><?= form_error('profile') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>