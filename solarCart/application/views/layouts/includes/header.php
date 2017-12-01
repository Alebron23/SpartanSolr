<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The solarCart</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost:8888/homepage.html">Homepage</a>
          <a class="navbar-brand" href="http://localhost:8888/solarCart">SolarCart</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php if(!$this->session->userdata('logged_in')) : ?>
            
            <?php else : ?>
            <li><a href="<?php echo base_url(); ?>ProgressBar">Project Status</a></li>
                    <!-- List group -->
        <!--<ul class="list-group">
          <?php foreach(get_categories_h() as $category) : ?>
            <li class="list-group-item"><a href="<?php echo base_url(); ?>products/category/<?php echo $category->id; ?>"><?php echo $category->name; ?></a></li>
          <?php endforeach; ?>    
        </ul>
      </div>
      
      <div class="panel panel-default panel-list">
        <div class="panel-heading">
           <h3 class="panel-title">

            Most Popular
          </h3>
        </div>-->
        <!-- List group -->
          <?php endif; ?>
			<?php if(!$this->session->userdata('logged_in')) : ?>
				<li><a href="<?php echo base_url(); ?>users/register">Create Account</a></li>
			<?php endif; ?>
		  </ul>
		  <?php if(!$this->session->userdata('logged_in')) : ?>
		   <form method="post" action="<?php echo base_url(); ?>users/login" class="navbar-form navbar-right">
				<div class="form-group">
					<input name="username" type="text" class="form-control" placeholder="Enter Username">
				</div>
				<div class="form-group">
					<input name="password" type="password" class="form-control" placeholder="Enter Password">
				</div>
        <button name="submit" type="submit" class="btn btn-default">Login</button>
      </form>
	  <?php else : ?>
		<form class="navbar-form navbar-right" method="post" action="<?php echo base_url(); ?>users/logout">
			<button name="submit" type="submit" class="btn btn-default">Logout</button>
		</form>
	  <?php endif; ?>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
		<div class="row">
			<div class="col-md-4">
				<?php $this->load->view('layouts/includes/sidebar'); ?>	
			</div>	
			</div>
			<div class="col-md-8">
				<div class="panel panel-default">
				<div class="panel-heading panel-heading-green">
					<h3 class="panel-title">The solarCart</h3>
				</div>
				<div class="panel-body">