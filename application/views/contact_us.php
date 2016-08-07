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
    <title>Contact Us - Class.com.mm</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/contact.css">

    <?php require('template/common.php'); ?>
    
  </head>
  <body>
    
    <?php
      require('template/header.php');
    ?>

    <!-- ========== main body section ============ -->
    <div class="container-fluid main-content-box">

      <!-- ========= content body ======== -->
      <div class="container">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0 content">

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-header">
            <b>Contact Us</b>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padding0">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <?php
                $attr = array('name'=>'contact-us','class'=>'form');
                echo form_open('home/contact-us',$attr);
              ?>
              <label for="name">Name :</label>
              <input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>" required>
              <span class="text-danger"><?php echo form_error('name'); ?></span><br/>

              <label for="email">Email :</label>
              <input type="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>" required>
              <span class="text-danger"><?php echo form_error('email'); ?></span><br/>

              <label for="phone">Phone :</label>
              <input type="text" name="phone" class="form-control" value="<?php echo set_value('phone'); ?>" required>
              <span class="text-danger"><?php echo form_error('phone'); ?></span><br/>

              <label for="address">Address :</label>
              <input type="text" name="address" class="form-control" value="<?php echo set_value('address'); ?>" required>
              <span class="text-danger"><?php echo form_error('address'); ?></span><br/>

              <label for="message">Message :</label>
              <textarea class="form-control" rows="5"><?php echo set_value('message'); ?></textarea>
              <span class="text-danger"><?php echo form_error('message'); ?></span><br/>

              <input type="submit" name="submit" value="Send" class="form-control btn btn-primary">

              <?php 
                echo form_close();
              ?>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <?php
                require('template/google_map.html');
              ?>
            </div>
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