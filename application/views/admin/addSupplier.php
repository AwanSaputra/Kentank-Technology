<img src="<?php echo base_url(); ?>assets/images/gb3.jpg" class="img-fluid" alt="Responsive image">

<section class="site-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center">
                <h1> Add Supplier </h1>
                <span class="subheading">SUPPLIER BIO CONTENT </span>
            </div>
        </div>

        <form method="POST" action="addSupplier" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label>Kontak</label>
                <input type="text" name="kontak" class="form-control" id="kontak">
            </div>
            <div class="form-group">
                <label>Profile</label>
                <input type="text" name="profile" class="form-control" id="profile">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type='file' name="userfile" id="userfile">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</section>