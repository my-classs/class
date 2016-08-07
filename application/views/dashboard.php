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
    <title><?php echo get_classname_by_userid($_SESSION['user_id']); ?> - Class.com.mm</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/dashboard.css">

    <?php require('template/common.php'); ?>
    
  </head>
  <body>
    
    <?php
      require('template/header.php');
    ?>

    <!-- ========== main body section ============ -->
    <div class="container main-content-box">

      <!-- ========= content body ======== -->
    
      <div class="col-md-12 padding0">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 padding0">
          <li class="menu-header">My Dashboard</li>
          <ul id="tabs">

            <li class="menu-item" id="current"><a href="<?php echo base_url().$_SESSION['url']; ?>" name="tab1">Profile</a></li>

            <li class="menu-header" style="margin-top: 50px;">Manage Class</li>
            <li class="menu-item"><a href="<?php echo base_url(); ?>dashboard/add-class-info.html" name="tab2">Add Class Info</a></li>
            <li class="menu-item" id="current"><a href="<?php echo base_url(); ?>dashboard/manage-subject">Subject</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 padding0 content-shell">
          <div class="col-md-12" id="content"> 

              <div class="col-md-12" id="tab1">
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 col-md-offset-3">
                  <h3>Your Profile Page</h3>
                  <?php
                    echo $this->session->flashdata('class-user');
                    echo $this->session->flashdata('update-user');
                    if(!empty($infos)){
                      foreach($infos as $val){

                          $name = $val->user_name;
                          $email = $val->user_email;
                          $phone = $val->user_phone;
                          $user = $val->user_type;
                          $class = $val->class_name;

                      }
                    }
                    else{
                      $name = set_value('name');
                      $email = set_value('email');
                      $phone = set_value('phone');
                      $user = set_value('user');
                      $class = set_value('class-name');
                    }
                    $attr = array('name'=>'profile','class' => 'form form-horizontal');
                    echo form_open('user/edit_user_profile',$attr);
                  ?>
                  <label for="name">Name :</label>
                  <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                  <span class="text-danger"><?php echo form_error('name'); ?></span><br/>

                  <label for="email">Email :</label>
                  <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                  <span class="text-danger"><?php echo form_error('email'); ?></span><br/>

                  <label for="phone">Phone :</label>
                  <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>">
                  <span class="text-danger"><?php echo form_error('phone'); ?></span><br/>

                  <label for="user">User Type :</label>
                  <?php if($user === 'class owner'){ ?>
                  <input type="radio" name="user" checked="checked" value="class owner" readonly>&nbsp;Class Owner&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="user" value="class finder" readonly> &nbsp;Class Finder<br/><br/>
                  <?php }else{ ?>
                  <input type="radio" name="user" value="class owner" readonly>&nbsp;Class Owner&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="user" value="class finder" checked="checked" readonly>&nbsp;Class Finder <br/><br/>
                  <?php } ?>

                  <label for="class-name">Class Name :</label>
                  <input type="text" name="class-name" class="form-control" value="<?php echo $class; ?>">
                  <span class="text-danger"><?php echo form_error('class-name'); ?></span><br/>

                  <input type="submit" name="save" value="Save" class="form-control btn btn-primary">
                  <?php
                    echo form_close();
                  ?>
                </div>
              </div>

          </div>
        </div>
      </div>
    </div>


      </div><!--/end content body -->

    </div><!-- /end main body -->

    <!-- =========== footer section =========== -->
    <?php
      require('template/footer.php');
    ?>
  </body>
</html>