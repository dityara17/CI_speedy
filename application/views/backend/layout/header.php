<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?= base_url('assets/css/font-awesome.css')?>" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="<?= base_url('assets/css/custom.css')?>" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="<?= base_url('assets/js/dataTables/dataTables.bootstrap.css')?>" rel="stylesheet" />
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Admin</a>
        </div>
        <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="./logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="<?= base_url('assets/img/find_user.png')?>" class="user-image img-responsive"/>
                </li>

                <li  >
                    <a class=""  href="<?= base_url('admin')?>"><i class="fa fa-book"></i> Products</a>
                </li>

<!--                <li  >-->
<!--                    <a class=""  href="--><?//= base_url('admin/categories')?><!--"><i class="fa fa-book"></i> Sub Categories</a>-->
<!--                </li>-->
            </ul>

        </div>

    </nav>



