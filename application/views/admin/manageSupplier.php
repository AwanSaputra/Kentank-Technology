<img src="<?php echo base_url(); ?>assets/images/gb3.jpg" class="img-fluid" alt="Responsive image">

<section class="site-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center">
                <h1> Suppliers List </h1>
                <span class="subheading">MANAGE SUPPLIERS</span>
            </div>
        </div>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Kontak</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Picture</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <?php $num = 0; ?>
            <?php foreach ($supplier as $row) : ?>
                <?php $num = $num + 1; ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $num ?></th>
                        <td><?= $row->name ?></td>
                        <td><?= $row->kontak ?></td>
                        <td><?= $row->profile ?></td>
                        <td><?= $row->photo ?></td>
                        <td width="20px"><a href="<?php echo base_url(); ?>index.php/admin/editSupplier/<?= $row->id ?>"><input type="submit" value="Edit" class="btn btn-info"></td>
                        <td width="20px"><a href="<?php echo base_url(); ?>index.php/admin/removeSupplier/<?= $row->id ?>"><input type="submit" value="Delete" class="btn btn-danger"></a></td>
                    </tr>
                </tbody>
            <?php endforeach ?>
            <tbody>
                <td colspan="8" align="right"> <a href="<?php echo base_url(); ?>index.php/admin/addS"><input type="submit" value="Add" class="btn btn-primary"></a> </td>
            </tbody>
        </table>
    </div>
</section>