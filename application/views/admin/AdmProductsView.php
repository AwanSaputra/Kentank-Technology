<img src="<?php echo base_url(); ?>assets/images/inventory.jpg" class="img-fluid" alt="Responsive image">

<div class="block-quick-info-2">
    <div class="container">
        <div class="block-quick-info-2-inner">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="d-flex quick-info-2">
                        <span class="icon icon-home mr-3"></span>
                        <div class="text">
                            <strong class="d-block heading">Visit our Location</strong>
                            <span class="excerpt">Somewhere in Indonesia</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="d-flex quick-info-2">
                        <span class="icon icon-phone mr-3"></span>
                        <div class="text">
                            <strong class="d-block heading">Call us today</strong>
                            <span class="excerpt"><a href="#">+62 81366694501</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="d-flex quick-info-2">
                        <span class="icon icon-envelope mr-3"></span>
                        <div class="text">
                            <strong class="d-block heading">Send us a message</strong>
                            <span class="excerpt"><a href="#">hxhealth@gmail.com</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="d-flex quick-info-2">
                        <span class="icon icon-clock-o mr-3"></span>
                        <div class="text">
                            <strong class="d-block heading">Opening hours</strong>
                            <span class="excerpt">Mon - Sat 8:00 AM - 5:00 PM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center mb-4">
    <div class="col-md-10 text-center">
        <h1 data-aos="fade-up" class="mb-3"> Products & Brands </h1>
        <p data-aos="fade-up" data-aos-delay="100"><a href="<?php echo base_url('index.php/admin/managenews') ?>" class="btn btn-primary btn-pill">Manage</a></p>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">

            <?php foreach ($products as $row) : ?>

                <div class="col-md-4 d-flex">
                    <div class="blog-entry align-self-stretch">
                        <a href="" class="block-20 rounded" style="background-image: url('<?php echo base_url(); ?>assets/images/<?= $row->picture ?>');">
                        </a>
                        <div class="text mt-3">
                            <div class="meta mb-2">
                                <div><a href="#"><?= $row->date ?></a></div>
                            </div>
                            <h3 class="heading"><a href="#"><?= $row->title ?> </a></h3>
                            <p> <?= $row->description ?> </p>
                        </div>
                    </div>
                </div>

            <?php endforeach ?>

        </div>
</section>