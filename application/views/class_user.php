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
    <title><?php echo $_SESSION['user_name']; ?> - Class.com.mm</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/class_user.css">

    <?php require('template/common.php'); ?>
    
  </head>
  <body>
    
    <?php
      require('template/header.php');
    ?>

    <!-- ========== main body section ============ -->
    <div class="container-fluid main-content-box">
      <div class="container">
        <!-- ========= content body ======== -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">

          <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 padding0">
            <li class="menu-header">My Dashboard</li>
            <ul id="tabs">

              <li class="menu-item" id="current"><a href="<?php echo base_url().$_SESSION['url']; ?>" name="tab1">Profile</a></li>

              <li class="menu-header" style="margin-top: 50px;">Manage Class</li>
              <li class="menu-item"><a href="<?php echo base_url(); ?>" name="tab2">Favourite Class</a></li>
            </ul>
          </div>

          <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 padding0 content-shell">
            <div class="col-md-12" id="content"> 
              <?php
                if(!empty($infos)){

                  foreach($infos as $info){
                    $name = $info->user_name;
                    $email = $info->user_email;
                    $phone = $info->user_phone;
                    $user = $info->user_type;
                    $class_name = $info->class_name;
                  }

                }
                else{
                  $name = set_value('name');
                  $email = set_value('email');
                  $phone = set_value('phone');
                  $user = set_value('user-type');
                  $class_name = set_value('class-name');
                }
              ?>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="tab1">
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 col-md-offset-3">

                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0 top-header-bar">
                    <b class="header-lb">Profile</b>
                   
                  </div>

                  <?php
                    echo '<div>'.$this->session->flashdata('class-user').'</div>';
                    $attr = array('class'=>'form','name'=>'class-user');
                    echo form_open('classuser/edit_class_user',$attr);
                  ?>
                  <label for="name">Name :</label>
                  <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                  <span class="text-danger"><?php echo form_error('name'); ?></span><br/>

                  <label for="email">Email :</label>
                  <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                  <span class="text-center"><?php echo form_error('email'); ?></span><br/>

                  <label for="phone">Phone :</label>
                  <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>">
                  <span class="text-danger"><?php form_error('phone'); ?></span><br/>

                  <label for="user">User Type :</label>
                  <?php if($user === 'class owner'){ ?>
                  <input type="radio" name="user" checked="checked" value="class owner" class="owner">&nbsp;Class Owner&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="user" value="class finder" class="finder"> &nbsp;Class Finder<br/><br/>
                  <?php }else{ ?>
                  <input type="radio" name="user" value="class owner" class="owner">&nbsp;Class Owner&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="user" value="class finder" class="finder" checked="checked">&nbsp;Class Finder <br/><br/>
                  <?php } ?>

                  <span class="c-name">
                  <label for="class-name">Class Name :</label>
                  <input type="text" name="class-name" class="form-control" value="<?php echo $class_name; ?>">
                  <span class="text-danger"><?php echo form_error('class-name'); ?></span><br/>
                  </span>

                  <input type="submit" name="edit" value="Update" class="form-control btn btn-primary">
                  <?php
                    echo form_close();
                  ?>

                </div>
              </div>

            </div><!--  /end content id -->
          </div>

        </div>
      </div><!-- /end container -->
    </div>

    <!-- =========== footer section =========== -->
    <?php
      require('template/footer.php');
    ?>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/class_user.js"></script>
  </body>
</html>