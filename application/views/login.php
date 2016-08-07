<?php
  require('template/language.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Class.com.mm</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/login.css">

    <?php require('template/common.php'); ?>
    
  </head>
  <body>
    
    <?php
      require('template/header.php');
    ?>

    <!-- ========== main body section ============ -->
    <div class="container-fluid main-content-box">

      <!-- ========= content body ======== -->
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4 ">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content">

            <h3 class="text-center">login to Course.com.mm</h3>
            <?php 
              echo $this->session->flashdata('login');
              $attr = array('class' => 'form','name' => 'login'); 
              echo form_open('user/login',$attr);
            ?>

              <label for="email">Email :</label>
              <input type="email" name="email" class="form-control" placeholder="your email" value="<?php echo set_value('email');?>" required>
              <span class="text-danger"><?php echo form_error('email'); ?></span><br/>

              <label for="password">Password</label>
              <input type="password" name="password" id="pass" placeholder="password" class="form-control">
              <span class="text-danger"><?php echo form_error('password'); ?></span><br/>

              <input type="submit" name="save" value="Register" class="form-control btn btn-primary">

            <?php
              echo form_close();
            ?>

        </div>

      </div><!--/end content body -->

    </div><!-- /end main body -->

    <!-- =========== footer section =========== -->
    <?php
      require('template/footer.php');
    ?>
    <!-- /end footer -->

  </body>
</html>