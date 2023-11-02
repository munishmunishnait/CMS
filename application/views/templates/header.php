<html>
	<head>
		<title>Fresh Bakers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
	</head>
	<body>
  <div class="outer" style="width: 100%; background-color: #684551">
    <nav class="navbar navbar-expand-lg mx-auto p-2" style="width: 1200px;">
      <div class="container-fluid">
        <a class="navbar-brand" style="color: #fff;" href="<?php echo base_url(); ?>">Fresh Bakers</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" style="color: #fff;" aria-current="page" href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: #fff;" href="<?php echo base_url(); ?>about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: #fff;" href="<?php echo base_url(); ?>posts">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: #fff;" href="<?php echo base_url(); ?>categories">Categories</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="d-flex justify-content-end">
            <ul class="navbar-nav ml-auto justify-content-end">
                <?php if(!$this->session->userdata('logged_in')) : ?>
                  <li><a class="nav-link"style="color: #fff;" href="<?php echo base_url(); ?>users/login">Login</a></li>
                  <li><a class="nav-link" style="color: #fff;"  href="<?php echo base_url(); ?>users/register">Register</a></li>
                <?php endif; ?>
                <?php if($this->session->userdata('logged_in')) : ?>
                  <li><a class="nav-link" style="color: #fff;" href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
                  <li><a class="nav-link" style="color: #fff;" href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
                  <li><a class="nav-link" style="color: #fff;" href="<?php echo base_url(); ?>users/logout">Logout</a></li>
                <?php endif; ?>
            </ul>
      </div>
    </nav>
    </div>


    <div class="container">
      <!-- Flash messages -->
      <?php if($this->session->flashdata('user_registered')): ?>
  <p class="alert alert-success"><?php echo $this->session->flashdata('user_registered'); ?></p>
  <?php $this->session->unset_userdata('user_registered'); ?>
<?php endif; ?>

<?php if($this->session->flashdata('post_created')): ?>
  <p class="alert alert-success"><?php echo $this->session->flashdata('post_created'); ?></p>
  <?php $this->session->unset_userdata('post_created'); ?>
<?php endif; ?>

<?php if($this->session->flashdata('post_updated')): ?>
  <p class="alert alert-success"><?php echo $this->session->flashdata('post_updated'); ?></p>
  <?php $this->session->unset_userdata('post_updated'); ?>
<?php endif; ?>

<?php if($this->session->flashdata('category_created')): ?>
  <p class="alert alert-success"><?php echo $this->session->flashdata('category_created'); ?></p>
  <?php $this->session->unset_userdata('category_created'); ?>
<?php endif; ?>

<?php if($this->session->flashdata('post_deleted')): ?>
  <p class="alert alert-success"><?php echo $this->session->flashdata('post_deleted'); ?></p>
  <?php $this->session->unset_userdata('post_deleted'); ?>
<?php endif; ?>

<?php if($this->session->flashdata('login_failed')): ?>
  <p class="alert alert-danger"><?php echo $this->session->flashdata('login_failed'); ?></p>
  <?php $this->session->unset_userdata('login_failed'); ?>
<?php endif; ?>

<?php if($this->session->flashdata('user_loggedin')): ?>
  <p class="alert alert-success"><?php echo $this->session->flashdata('user_loggedin'); ?></p>
  <?php $this->session->unset_userdata('user_loggedin'); ?>
<?php endif; ?>

<?php if($this->session->flashdata('user_loggedout')): ?>
  <p class="alert alert-success"><?php echo $this->session->flashdata('user_loggedout'); ?></p>
  <?php $this->session->unset_userdata('user_loggedout'); ?>
<?php endif; ?>

<?php if($this->session->flashdata('category_deleted')): ?>
  <p class="alert alert-success"><?php echo $this->session->flashdata('category_deleted'); ?></p>
  <?php $this->session->unset_userdata('category_deleted'); ?>
<?php endif; ?>
