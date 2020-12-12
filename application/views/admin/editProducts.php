<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header text-center">
                    Form Ubah Data Supplier
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $products['id'] ?>">
                        <div class="form-group">
                            <label for="title">Tama</label>
                            <input type="text" class="form-control" id="title" name="title" value="<?= $products['title']; ?>">
                            <small class="form-text text-danger"><?= form_error('name') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="<?= $products['description']; ?>">
                            <small class="form-text text-danger"><?= form_error('kontak') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>