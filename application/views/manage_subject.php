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
    <title><?php echo get_classname_by_userid($_SESSION['user_id']); ?> | add subject - Class.com.mm</title>
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

            <li class="menu-item"><a href="<?php echo base_url().$_SESSION['url']; ?>">Profile</a></li>

            <li class="menu-header" style="margin-top: 50px;">Manage Class</li>
            <li class="menu-item"><a href="<?php echo base_url(); ?>dashboard/add-class-info.html">Add Class Info</a></li>
            <li class="menu-item" id="current"><a href="<?php echo base_url(); ?>dashboard/manage-subject">Subject</a></li>
            
          </ul>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 padding0">
          <div class="col-md-12" id="content"> 

              <div class="col-md-12">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <h3>Your Subjects</h3>
                  <table class="table">
                    <tr>
                      <th>No</th>
                      <th>Title</th>
                      <th>Duration</th>
                      <th>Fees</th>
                      <th>Time</th>
                      <th colspan="2">Action</th>
                    </tr>
                    <?php
                      $x = "";
                      foreach($subjects as $subject):
                        $x = $x + 1;
                    ?>
                    <tr>
                      <td><?php echo $x; ?></td>
                    </tr>
                    <?php endforeach; ?>
                  </table>
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