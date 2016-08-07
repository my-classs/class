<?php
  require('template/language.php');
  $id = $this->uri->segment(4) - 1700;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo unslug($this->uri->segment(2)) ?> - Class.com.mm</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/course.css">

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

          <?php
            foreach($course_info as $info):
          ?>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0 course-banner">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0 course-banner-shell">
              <div class="col-md-10 col-md-offset-1 inner">
                <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                  <img src="<?php echo base_url() ?>upload/class-logo/<?php echo $info->class_img; ?>" class="img-responsive">
                </div>
                <div class="col-xs-8 col-sm-8 col-md-9 col-lg-9">
                  <span class="header"><?php echo $info->class_name; ?></span><br/>
                  <b><span class="glyphion glyphicon-eye-open label-icon"></span></b>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 info-body"> 
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
              <div class="col-md-12 info-bar"><h4>Contact</h4></div>
              <div class="col-md-12 padding0">
                <table class="table">
                  <tr>
                    <td>Address</td>
                    <td>: <?php echo $info->address; ?></td>
                  </tr>
                  <tr class="mmlanguage">
                    <td>Township</td>
                    <td>: <?php echo $info->region_name; ?></td>
                  </tr>
                  <tr>
                    <td>City</td>
                    <td>: <?php echo $info->region; ?></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;View Contact Phone</button></td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
              <div class="col-md-12 info-bar"><h4 class="mmlanguage">ကျွန်ုပ်တို့ အကြောင်း</h4></div>
              <div class="col-md-12">
                <p>
                  <br/>
                  <?php echo $info->class_spec; ?>
                  <br/><br/>
                </p>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
              <div class="col-md-12 info-bar"><h4 class="mmlanguage">တက်ရောက်နိုင်သော သင်တန်းများ</h4></div>
              <table class="table table-stripped">
                <tr>
                  <th>Subject Name</th>
                  <th>Duration</th>
                  <th>Fees</th>
                  <th>City</th>
                  <th>Start Date</th>
                </tr>
                <?php  
                  foreach($subject_list as $subject):
                    $subj_id = $subject->id + 50009;
                ?>
                <tr>
                  <td><?php echo $subject->subject_name; ?></td>
                  <td><?php echo $subject->duration; ?></td>
                  <td><?php echo $subject->subject_fees; ?></td>
                  <td class="mmlanguage"><?php echo $subject->region_name; ?></td>
                  <td><?php echo show_time($subject->start_date); ?></td>
                  <td><a href="<?php echo base_url(); ?>subject/detail/<?php echo slug_url($subject->subject_name); ?>/<?php echo $subj_id; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;View Detail</a></td>
                </tr>
                <?php
                  endforeach;
                ?>
              </table>
            </div>

          </div>

          <?php
            endforeach;
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