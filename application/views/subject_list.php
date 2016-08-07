<?php
  require('template/language.php');
  $subj_id = $this->uri->segment(3) - 609;
  $sub_id = get_sub_by_subj($subj_id);
  $sub_url = $sub_id + 209;

  $sub_name = get_sub_name($sub_id);
  foreach($sub_name as $name){
    $sub_name_mm = $name->sub_name;
    $sub_name_en = $name->sub_name_en;
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo unslug($this->uri->segment(2)); ?> - Myanmar Online Course</title>

    <?php require('template/common.php'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/subject.css">
  
  </head>
  <body>
    
    <?php
      require('template/header.php');
    ?>

    <!-- ========== main body section ============ -->
    <div class="container-fluid main-content-box">
      <div class="container">
        <!-- ========= left menu ========== -->
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 left-shell">
          
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 left">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 left-cat-header mmlanguage">
              <?php
                $res = get_sub_name($sub_id);
                foreach($res as $sub){
                  echo get_lan($sub->sub_name,$sub->sub_name_en);
                }
              ?>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 panel-group" id="accordion">
              
                
                  <?php
                    $val = get_subject_by_sub($sub_id);
                    foreach($val as $subj):
                      $subj_id = $subj->subj_id + 609;
                  ?>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <li class="panel-title mmlanguage">
                        <a href="<?php echo base_url(); ?>subjects/<?php echo slug_url($subj->subj_name_en); ?>/<?php echo $subj_id; ?>">
                        <span><?php echo get_lan($subj->subj_name,$subj->subj_name_en); ?></span></a>
                      </li>
                    </div>
                  </div>
                  <?php endforeach; ?>
            </div>
          </div>

        </div><!-- /end left menu -->

        <!-- ========= content body ======== -->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 padding0">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content padding0">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 label-row">
              <li class="mmlanguage show-label"><?php echo get_lan('သင်တန်းများ','Classes'); ?> ></li>
              <li class="mmlanguage show-label"><a href="<?php echo base_url(); ?>courses/sub/<?php echo $sub_url; ?>/<?php echo slug_url($sub_name_en); ?>"><?php echo get_lan($sub_name_mm,$sub_name_en); ?> ></a></li>
              <li class="mmlanguage show-label active"> <?php echo $this->uri->segment(2); ?> ></li>
            </div>
            <?php
              foreach($subjects as $subject):
                $class_id =  $subject->class_id + 1700;
            ?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 subject-item padding0">
                <div class="logo-img">
                  <img src="<?php echo base_url(); ?>upload/class-logo/<?php echo $subject->class_img; ?>" class="img-responsive">
                </div>
                <div class="text-label">
                  <span class="subject-name"><a href="<?php echo base_url(); ?>subject/detail/<?php echo slug_url($subject->subject_name) ?>/<?php echo $subject->id + 50009; ?>"><?php echo $subject->subject_name; ?></a></span><br/>

                  <span class="class-name"><span class="glyphicon glyphicon-home"></span>&nbsp;<a href="<?php echo base_url(); ?>/class/<?php echo slug_url($subject->class_name); ?>/<?php echo $class_id; ?>"><?php echo $subject->class_name; ?></a></span><br/><br/>

                  &nbsp;<span class="time"><span class="glyphicon glyphicon-calendar"></span>&nbsp;Start Date : <?php echo show_time($subject->start_date); ?></span>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>

        </div><!--/end content body -->
      </div> <!-- /end container -->
    </div><!-- /end main body -->

    <!-- =========== footer section =========== -->
    <?php
      require('template/footer.php');
    ?>
    <!-- /end footer -->

  </body>
</html>