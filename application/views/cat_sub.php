<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Teach Deals</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('home/css/my.css') ?>">
</head>
<body>

<div class="header">
    <div class="container">
        <nav class="top-nav">
            <ul>
                <li><a href="">HOT DEALS</a></li>
                <li class="<?php if ($category['parent'] == 1){echo 'active';} ?>"><a href="<?= base_url('category/1')?>">TEACH DEALS</a></li>
                <li class="<?php if ($category['parent'] == 6){echo 'active';} ?>"><a href="<?= base_url('category/6')?>">GAME DEALS</a></li>
                <li class="<?php if ($category['parent'] == 7){echo 'active';} ?>"><a href="<?= base_url('category/7')?>">APPAREL DEALS</a></li>
                <li class="<?php if ($category['parent'] == 8){echo 'active';} ?>"><a href="<?= base_url('category/8')?>">GENERAL DEALS</a></li>
            </ul>
        </nav>
        <div class="title">
            <h2>TEACH DEALS</h2>
        </div>
        <div class="category">
            <nav>
                <ul>
                    <?php  foreach ($categories as $categori): ?>
                        <li class="<?php if ($categori['id_category'] == $category['id_category']){echo 'active';}  ?>"><a href="<?=base_url('cat-sub')?>/<?=$categori['id_category']?>"><?=$categori['c_name']?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </div>
</div>

<section id="products">
    <div class="container">
        <div class="row">
            <?php
            if ($products == []) {echo "we dont have product  this category for now";}
            foreach ($products as $product): ?>
                <div class="col-md-4">
                    <div class="box-pro">
                        <div class="img" style="text-align: center">
                            <?= $product['html']?> <br>
                        </div>
                        <a href="#" style="font-size:; 16px; font-weight: bold;color: #333333"><?=$product['name'] ?></a>
                        <p style="font-size: 18px; font-weight: bold"><span style="color: red">Was $<?= number_format($product['p_price'])?></span> | <span style="color:forestgreen;">Now $<?= number_format($product['s_price'])?></span></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>