<section class="site-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center">
                <h1> Your Messages </h1>
                <span class="subheading">CHECK EMAILS TO REPLY</span>
            </div>
        </div>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <?php $num = 0; ?>
            <?php foreach ($messages as $row) : ?>
                <?php $num = $num + 1; ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $num ?></th>
                        <td><?= $row->fname ?></td>
                        <td><?= $row->lname ?></td>
                        <td><?= $row->email ?></td>
                        <td><?= $row->subject ?></td>
                        <td><?= $row->message ?></td>
                        <td width="20px"><a href="<?php echo base_url(); ?>index.php/admin/removeMessages/<?= $row->id ?>"><input type="submit" value="Delete" class="btn btn-danger"></a></td>
                    </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    </div>
</section>