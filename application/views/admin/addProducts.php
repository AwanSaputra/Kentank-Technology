<img src="<?php echo base_url(); ?>assets/images/inventory.jpg" class="img-fluid" alt="Responsive image">
<section class="site-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center">
                <h1> Add Products </h1>
                <span class="subheading">FILL DATA FOR NEW PRODUCT</span>
            </div>
        </div>

        <form method="POST" action="addProducts" enctype="multipart/form-data">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" id="description">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type='file' name="userfile" id="userfile">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</section>