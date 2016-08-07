<?php
  require('template/language.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/register.css">

    <?php require('template/common.php'); ?>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/register.js"></script>
  </head>
  <body>
    
    <?php
      require('template/header.php');
    ?>

    <!-- ========== main body section ============ -->
    <div class="container-fluid main-content-box">
      
      <!-- ========= left menu ========== -->
      <!-- /end left adv -->

      <!-- ========= content body ======== -->
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content padding0">

          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 register-shell">
            <h3 class="text-center">Register on Class.com.mm</h3>
            <?php 
              echo $this->session->flashdata('register');
              $attr = array('class' => 'form','name' => 'register'); 
              echo form_open('user/register',$attr);
            ?>

              <label for="user">User Type :</label>
              <input type="radio" name="user" value="class finder" class="finder" checked>&nbsp;I am class finder&nbsp;&nbsp;&nbsp;
              <input type="radio" name="user" value="class owner" class="owner">&nbsp;I am class owner<br/><br/>
                
            
              <label for="name">Name :</label>
              <input type="text" name="name" class="form-control" placeholder="your name" value="<?php echo set_value('name'); ?>" required>
              <span class="text-danger"><?php echo form_error('name'); ?></span><br/>

              <label for="email">Email :</label>
              <input type="email" name="email" class="form-control" placeholder="your email" value="<?php echo set_value('email');?>" required>
              <span class="text-danger"><?php echo form_error('email'); ?></span><br/>

              <label for="password">Password</label>
              <input type="password" name="password" id="pass" placeholder="password" class="form-control" onkeyup="CheckPasswordStrength(this.value)">
              <div id="password_strength"></div>
              <span class="text-danger"><?php echo form_error('password'); ?></span><br/>

              <label for="repassword">Confirm Password</label>
              <input type="password" id="repass" name="repassword" placeholder="re-enter password" class="form-control">
              <span class="text-danger"><?php echo form_error('repassword'); ?></span>
              <div class="btn btn-success" id="pass_confirm">Password Match !</div>
              <div class="btn btn-danger" id="pass_error">Password do not match !</div><br/>

              <label for="phone">Phone :</label>
              <input type="text" name="phone" class="form-control" placeholder="phone number" value="<?php echo set_value('phone'); ?>" required>
              <span class="text-danger"><?php echo form_error('phone'); ?></span><br/>

              <div class="col-md-12 padding0 class-name">
                <label for="class-name">Class Name:</label>
                <input type="text" name="class-name" class="form-control" value="<?php echo set_value('class-name'); ?>" placeholder="your class name">
                <span class="text-danger"><?php echo form_error('class-name'); ?></span><br/>
              </div>

              <input type="checkbox" name="term">&nbsp;You must agree to accept Class.com.mm's terms & condition.

              <input type="submit" name="save" value="Register" class="form-control btn btn-primary">

            <?php
              echo form_close();
            ?>
            
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 already">
            <span class="text-center">You are alerady register ? <a href="<?php echo base_url(); ?>login.html">click here</a> to login</span>
          </div>

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