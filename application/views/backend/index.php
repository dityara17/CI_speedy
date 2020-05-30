<?php $this->load->view('backend/layout/header') ?>


    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Data Products | <a href="./admin/product/create" class="btn btn-success">Add</a></h2>
                    <h5>All data product. </h5>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr/>

            <div class="row">
                <div class="col-md-12">
                    <div class="table">
                        <table class="table table-striped" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>P price</th>
                                <th>S price</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 0;
                            foreach ($products as $product): ?>
                                <tr>
                                    <td><?= $no += 1 ?></td>
                                    <td><?= $product['name'] ?></td>
                                    <td><?= $product['p_price'] ?></td>
                                    <td><?= $product['s_price'] ?></td>
                                    <td><?= $product['c_name'] ?></td>
                                    <td>
                                        <a class="btn btn-warning" href="./admin/product/delete/<?= $product['id'] ?>"><i class="fa fa-trash-o"></i></a>
                                        <a class="btn btn-info" href="./admin/product/edit/<?= $product['id'] ?>"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /. PAGE INNER  -->
    </div>

<?php $this->load->view('backend/layout/footer') ?>