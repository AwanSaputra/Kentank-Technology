<img src="<?php echo base_url(); ?>assets/images/gb3.jpg" class="img-fluid" alt="Responsive image">

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
                            <span class="excerpt"><a href="#">+62 12345678</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="d-flex quick-info-2">
                        <span class="icon icon-envelope mr-3"></span>
                        <div class="text">
                            <strong class="d-block heading">Send us a message</strong>
                            <span class="excerpt"><a href="#">kentanktech@gmail.com</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
                    <div class="d-flex quick-info-2">
                        <span class="icon icon-clock-o mr-3"></span>
                        <div class="text">
                            <strong class="d-block heading">Opening hours</strong>
                            <span class="excerpt">Mon - Sat 8:00 AM - 9:00 PM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="site-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center">
                <h1> Our Suppliers </h1>
                <span class="subheading">Colleague &amp; Partnerts</span>
                <p data-aos="fade-up" data-aos-delay="100"><a href="<?php echo base_url('index.php/admin/manageSupplier') ?>" class="btn btn-primary btn-pill">Manage</a></p>
            </div>
        </div>
        <div class="row">

            <?php foreach ($supplier as $row) : ?>

                <div class="col-md-6 col-lg-3">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url('<?php echo base_url(); ?>assets/images/<?= $row->photo ?>');"></div>
                        </div>
                        <div class="text pt-3 px-3 pb-4 text-center">
                            <h3><?= $row->name ?></h3>
                            <span class="position mb-2"><?= $row->kontak ?></span>
                            <div class="faded">
                                <p><?= $row->profile ?>.</p>
                                <ul class="ftco-social text-center">
                                    <li><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                    <li><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach ?>

        </div>
    </div>
</section>