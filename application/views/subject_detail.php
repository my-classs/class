<?php
  require('template/language.php');
  $subj_id = $this->uri->segment(4) - 50009;
  $sub_id = get_sub_by_subject($subj_id);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo unslug($this->uri->segment(3)); ?> - Myanmar Online Course</title>

    <?php require('template/common.php'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/subject.css">
  
  </head>
  <body>
    
    <?php
      require('template/header.php');
    ?>

    <!-- ========== main body section ============ -->
    <div class="container-fluid main-content-box">
      <div class="container padding0">
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
            <?php
              foreach($subject_detail as $detail):
            ?>
            <div class="col-md-12 col-sm-12 padding0 detail-header">
              <div class="col-md-2">
                <img src="<?php echo base_url(); ?>/upload/class-logo/<?php echo $detail->class_img; ?>" class="img-responsive">
              </div>
              <div class="col-md-8">
                <b class="detail-name"><?php echo $detail->subject_name; ?></b>
                <h5><?php echo $detail->class_name; ?></h5>
                <h6>
                  <a href="" class="btn btn-info"><span class="glyphicon glyphicon-home"></span>&nbsp;View Profile</a>
                </h6>
              </div>
            </div>

            <div class="col-md-12 detail-info">
              <table class="table">
                <tr>
                  <th colspan="2">Subject Info</th>
                </tr>
                <tr>
                  <td>Duration</td>
                  <td><?php echo $detail->duration; ?></td>
                </tr>
                <tr>
                  <td>Time</td>
                  <td><?php echo $detail->subject_time; ?></td>
                </tr>
                <tr>
                  <td>Starting Date</td>
                  <td><?php echo show_time($detail->start_date); ?></td>
                </tr>
                <tr>
                  <td>Fees</td>
                  <td><?php echo $detail->subject_fees; ?></td>
                </tr>
                <tr>
                  <td>Certification</td>
                  <td>
                    <?php  
                      if($detail->certification == 1){
                        echo "Yes";
                      }
                      else{
                        echo "No";
                      }
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>Region</td>
                  <td><?php echo $detail->region_name; ?></td>
                </tr>
                <tr>
                  <td>Address</td>
                  <td><?php echo $detail->address; ?></td>
                </tr>
                <tr>
                  <td colspan="2"><button class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;View Contact Phone</button></td>
                </tr>
              </table>
            </div>

            <div class="col-md-12 detail-desc">
              <table class="table">
                <tr>
                  <th>Description</th>
                </tr>
                <tr>
                  <td><p><?php echo $detail->subject_desc; ?></p></td>
                </tr>
              </table>
            </div>

            <div class="col-md-12 detail-desc">
              <table class="table">
                <tr>
                  <th>About <?php echo $detail->class_name; ?></th>
                </tr>
                <tr>
                  <td><p><?php echo $detail->class_spec; ?></p></td>
                </tr>
              </table>
            </div>
            <?php
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