<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/index.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/admin_login.css">
    
  </head>
  <body>
    
    <div class="container-fluid header-bar navbar-fixed-top">
      
      <span class="navbar-brand"><span class="fa fa-book" aria-hidden="true"></span>&nbsp;<i>Admin Panel</i></span>

    </div>

    <div class="container-fluid">
        
      <div class="container">
        
        <div class="col-md-4 col-md-offset-4 login-shell">
          
          <h4>Login to continue</h4>

          <?php
            echo $this->session->flashdata('login-msg');
            $attributes = array('class'=> 'form','name' => 'login');
            echo form_open('admin/dashboard/login',$attributes);
          ?>
            
            <label for="email">Email :</label>
            <input type="email" name="email" placeholder="email" value="" class="form-control" autocomplete="off" autofocus="on">
            <span class="text-danger"><?php echo form_error('email'); ?></span><br/>

            <label for="password">Password :</label>
            <input type="password" name="password" placeholder="password" class="form-control">
            <span class="text-danger"><?php echo form_error('password'); ?></span><br/>

            <input type="submit" name="submin" value="Login" class="btn btn-success col-md-12">

          <?php
            echo form_close();
          ?>

        </div>

      </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  </body>
</html>