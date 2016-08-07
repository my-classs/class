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
    <title><?php echo unslug($this->uri->segment(3)) ?> - Class.com.mm</title>

    <?php require('template/common.php'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/course.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/hover-zoom.css">
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
                $id = $this->uri->segment(2) - 109;
                $main_name = get_main_name($id);
                foreach($main_name as $name){
                  echo get_lan($name->cat_name,$name->cat_name_en).'main';
                }
              ?>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 panel-group" id="accordion">
              <?php  
                $x = "";
                foreach($sub_cats as $sub):
                  $x = $x + 1;
              ?>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <li class="panel-title mmlanguage">
                      <a data-toggle="collapse" href="#collapse<?php echo $x ?>">
                      <span><?php echo get_lan($sub->sub_name,$sub->sub_name_en);  ?></span></a>
                    </li>
                  </div>
                  <div id="collapse<?php echo $x; ?>" class="panel-collapse collapse">
                    <?php
                      $subj_id = $sub->sub_id + 609;
                      $subjects = get_subject($sub->sub_id);
                      foreach($subjects as $subject):
                    ?>
                    <div class="panel-body">
                    <a href="<?php echo base_url(); ?>subjects/<?php echo slug_url($subject->subj_name); ?>/<?php echo $subj_id; ?>">
                      <?php echo get_lan($subject->subj_name,$subject->subj_name_en);  ?>
                    </a>
                    </div>
                    <?php
                      endforeach;
                    ?>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

        </div><!-- /end left menu -->

        <!-- ========= content body ======== -->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 padding0">
          
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content padding0">
            <?php
              $y = "";
              foreach($sub_cats as $sub):
                $sub_id = $sub->sub_id + 209;
                $y = $y + 1;
            ?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 item view view-first padding0">
                  <img src="<?php echo base_url(); ?>images/cat-cat_<?php echo $y ?>.png" />
                  <div class="mask">
                      <h3 class="mmlanguage"><?php echo get_lan($sub->sub_name,$sub->sub_name_en); ?></h3>
                      <p>Search you want to learn subject in this category.</p>
                      <a href="<?php echo base_url(); ?>courses/sub/<?php echo $sub_id; ?>/<?php echo slug_url($sub->sub_name_en); ?>" class="info">view more</a>
                  </div>
              </div> 
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 item-footer mmlanguage">
                <?php echo get_lan($sub->sub_name,$sub->sub_name_en); ?>
              </div>
            </div>
            <?php
              if($y == 3){
                $y = 1;
              }
              endforeach;
            ?> 
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