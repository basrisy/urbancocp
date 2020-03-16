<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title><?php if ($this->uri->segment(1)) { echo  ucfirst($this->uri->segment(1)) ." - ". SITE_NAME; }else{ echo SITE_NAME ;}  ?></title>

  <!-- Favicon -->
  <!-- <link rel="icon" href="<?php echo base_url(); ?>assets/img/core-img/favicon.ico"> -->

  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css">
</head>