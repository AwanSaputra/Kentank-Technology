<img src="<?php echo base_url(); ?>assets/images/inventory.jpg" class="img-fluid" alt="Responsive image">
<section class="site-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center">
                <h1> Products List </h1>
                <span class="subheading">MANAGE PRODUCTS SHOWN</span>
            </div>
        </div>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Views</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Description</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <?php $num = 0; ?>
            <?php foreach ($products as $row) : ?>
                <?php $num = $num + 1; ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $num ?></th>
                        <td><?= $row->title ?></td>
                        <td><?= $row->date ?></td>
                        <td><?= $row->picture ?></td>
                        <td><?= $row->description ?></td>

                        <td width="20px"><a href="<?php echo base_url(); ?>index.php/admin/editProducts/<?= $row->id ?>"><input type="submit" value="Edit" class="btn btn-info"></td>
                        <td width="20px"><a href="<?php echo base_url(); ?>index.php/admin/removeProducts/<?= $row->id ?>"><input type="submit" value="Delete" class="btn btn-danger"></a></td>
                    </tr>
                </tbody>
            <?php endforeach ?>
            <tbody>
                <td colspan="8" align="right"> <a href="<?php echo base_url(); ?>index.php/admin/addP"><input type="submit" value="Add" class="btn btn-primary"></a> </td>
            </tbody>
        </table>
    </div>
</section>