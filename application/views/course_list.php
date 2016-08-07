<?php
  require('template/language.php');
  $sub_id = $this->uri->segment(3) - 209;
  $main_id = get_main_id($sub_id);
  
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
    <title><?php echo unslug($this->uri->segment(4)); ?> - Myanmar Online Class</title>

    <?php require('template/common.php'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/course_list.css">
  
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
                $res = get_main_name($main_id);
                foreach($res as $sub){
                  echo get_lan($sub->cat_name,$sub->cat_name_en);
                }
              ?>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 panel-group" id="accordion">
              
                
                  <?php
                    $val = get_sub_by_main($main_id);
                    foreach($val as $sub):
                      $url_id = $sub->sub_id +209;
                  ?>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <li class="panel-title mmlanguage">
                       <a href="<?php echo base_url(); ?>courses/sub/<?php echo $url_id ?>/<?php echo slug_url($sub->sub_name_en); ?>"><?php echo get_lan($sub->sub_name,$sub->sub_name_en); ?></a>
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
              <li class="mmlanguage show-label"><?php echo get_lan('သင်တန်းများ','Classes') ?> ></li>
              <li class="mmlanguage show-label active"> <?php echo get_lan($sub_name_mm,$sub_name_en); ?> ></li>
            </div>
            <?php
              foreach($course_list as $list):
                $class_id =  $list->class_id + 1700;
            ?>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-item">
                  <a href="<?php echo base_url(); ?>class/<?php echo slug_url($list->class_name); ?>/<?php echo $class_id; ?>">
                    <img src="<?php echo base_url(); ?>upload/class-logo/<?php echo $list->class_img; ?>" class="img-responsive center-block">
                  </a>
                
                  <span class="name">
                    <span class="glyphicon glyphicon-home"></span>&nbsp;
                    <a href="<?php echo base_url(); ?>class/<?php echo slug_url($list->class_name); ?>/<?php echo $class_id; ?>"><?php echo $list->class_name; ?></a><br/><br/>
                  </span>

                  <span class="address"><span class="glyphicon glyphicon-road"></span>&nbsp;<?php echo $list->address; ?></span><br/><br/>
                  <a href="<?php echo base_url(); ?>class/<?php echo slug_url($list->class_name); ?>/<?php echo $class_id; ?>" class="btn btn-primary form-control">View</a>
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