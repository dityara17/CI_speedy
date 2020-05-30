<?php $this->load->view('backend/layout/header') ?>


    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Product Add</h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr/>

            <div class="row">
                <form action="<?= base_url("admin/product/update/".$product['id']."") ?>" method="post">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Product Name</label>
                            <input type="text" name="name" class="form-control" required value="<?=$product['name'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Product Category</label>
                            <select name="category" id="" class="form-control">
                                <?php foreach ($categories as $category): ?>
                                    <option <?php if($product['category_id']== $category['id_category']){echo 'selected';} ?> value="<?=$category['id_category']?>"><?=$category['c_name']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Product Desc</label>
                            <textarea name="desc" id="" cols="30" rows="10" class="form-control" required><?=$product['desc'] ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Html</label>
                            <textarea name="html" id="" cols="30" rows="10" class="form-control" required><?=$product['html'] ?></textarea>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="">Product Price</label>
                            <input type="number" name="pprice" min="0" class="form-control" required value="<?=$product['p_price'] ?>">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="">Sale Price</label>
                            <input type="number" name="sprice" min="0" class="form-control" required value="<?=$product['s_price'] ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-success" style="width: 100%">Submit</button>
                    </div>
                </form>
            </div>

        </div>
        <!-- /. PAGE INNER  -->
    </div>

<?php $this->load->view('backend/layout/footer') ?>