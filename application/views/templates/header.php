<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en-AU">
	<head>
		<meta charset="utf-8" />		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/common_grounds.css" />
		<link rel="icon" href="../assets/img/icon.png" />

		<title>Common Grounds Café - <?= $page_title ?></title>
	</head>

	<body>
		<header>
			<h1><img src="<?php echo base_url(); ?>assets/img/icon.png" alt="Common Grounds Café Logo" /> Common Grounds Cafe</h1>

			<nav>
				<ul>
					<li>
						<a href="<?php echo base_url(); ?>">HOME</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>products">PRODUCTS</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>products/new">NEW PRODUCT</a>
					</li>
					<li>
						<a href="<?php echo base_url(); ?>about_us">ABOUT</a>
					</li>

					<?php if (!isset($_SESSION["id_user"])) : ?>
						<li>
							<a href="<?php echo base_url(); ?>login">LOGIN</a>
						</li>
					<?php else : ?>
						<li>
							<a href="<?php echo base_url(); ?>users/logout"><?= $_SESSION["name"] ?> - LOGOUT</a>
						</li>
					<?php endif; ?>
				</ul>
			</nav>
		</header>

		<div id="img-showcase">
			<div class="img-text">
				<h2>Lorem ipsum dolor sit amet</h2>
				<p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
			</div>
		</div>
		