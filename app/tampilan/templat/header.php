<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $data['judul']; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASIS_URL; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASIS_URL; ?>/css/bootstrap.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
		    <a class="navbar-brand" href="<?php echo BASIS_URL; ?>">PHP-KMT</a>
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>
		    	</button>
		  	<div class="collapse navbar-collapse" id="navbarNav">
		    	<ul class="navbar-nav">
		    		<li class="nav-item <?php if ($data['pages'] == 'Beranda') { echo 'active'; } ?>">
		        		<a class="nav-link" href="<?php echo BASIS_URL; ?>">Beranda<span class="sr-only">(current)</span></a>
		      		</li>
		      		<li class="nav-item <?php if ($data['pages'] == 'Tentang') { echo 'active'; } ?>">
		        		<a class="nav-link" href="<?php echo BASIS_URL; ?>/tentang">Tentang</a>
		        	</li>
		        	<li class="nav-item <?php if ($data['pages'] == 'Mahasiswa') { echo 'active'; } ?>">
		        		<a class="nav-link" href="<?php echo BASIS_URL; ?>/mahasiswa">Mahasiswa</a>
		        	</li>
		    	</ul>
		  	</div>
		</div>
	</nav>
	<!--div class="container mt-4">
		<nav aria-label="breadcrumb">
		  	<ol class="breadcrumb">
		    	<li class="breadcrumb-item <?php //if (!isset($data['sub'])) { echo 'active'; } ?>" aria-current="page"><?php //if (!isset($data['sub'])) { echo '<a href="' . BASIS_URL . '">' . $data['pages']; ?></li>
		 	</ol>
		</nav>
	</div-->
	<br>