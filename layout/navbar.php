<?php
ob_start();
session_start();
require_once('../database/db_global.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Admin - COP-MART</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="Flash Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
	<meta name="keywords"
		content="admin, category, shop">
	<meta name="author" content="Nhóm 1" />
	<!-- Favicon icon -->
	<link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
	<!-- fontawesome icon -->
	<link rel="stylesheet" href="../assets/fonts/fontawesome/css/fontawesome-all.min.css">
	<!-- animation css -->
	<link rel="stylesheet" href="../assets/plugins/animation/css/animate.min.css">

	<!-- vendor css -->
	<link rel="stylesheet" href="../assets/css/style.css">
	
</head>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->

	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menupos-fixed menu-light brand-blue ">
		<div class="navbar-wrapper ">
			<div class="navbar-brand header-logo">
				<a href="home.php" class="b-brand">
					<span style="color: whitesmoke;">COP-MART</span>
				</a>
				<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
			</div>
			<div class="navbar-content scroll-div">
				<ul class="nav pcoded-inner-navbar">
					<li class="nav-item">
						<a href="/cop-mart/home.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></i></span><span class="pcoded-mtext">Màn hình chính</span></a>
					</li>
					<li class="nav-item">
						<a href="/cop-mart/NewProduct.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-cpu"></i></span><span class="pcoded-mtext">Sản phẩm</span></a>
					</li>
					<li class="nav-item">
						<a href="/cop-mart/supplier.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Nhà cung cấp</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Đơn hàng</span></a>
						<ul class="pcoded-submenu">
						<li class="">	<a href="/cop-mart/viewCustomer/listCustomer.php" class="nav-link"><span class="pcoded-micon"><i class="fas fa-users"></i></span><span class="pcoded-mtext">Quản lý khách hàng</span></a></li>
						<li class="">	<a href="/cop-mart/viewCustomerRole/listrole.php" class="nav-link"><span class="pcoded-micon"><i class="fas fa-users"></i></span><span class="pcoded-mtext">Quản lý loại tài khoản</span></a></li>

						</ul>
					</li>
                    <li class="nav-item">
						<a href="/cop-mart/viewCustomer/listCustomer.php" class="nav-link"><span class="pcoded-micon"><i class="fas fa-users"></i></span><span class="pcoded-mtext">Quản lý khách hàng</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Đơn hàng</span></a>
						<ul class="pcoded-submenu">
							<li class=""><a href="importOrder.php" class="">Đơn hàng nhập</a></li>
							<li class=""><a href="exportOrder.php" class="">Đơn hàng xuất</a></li>
						</ul>
					</li>
					<li class="nav-item disabled"><a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-power"></i></span><span class="pcoded-mtext">Disabled menu</span></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->