<?php
  require('template/language.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search - Class.com.mm</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/search.css">

    <?php require('template/common.php'); ?>
    
  </head>
  <body>
    
    <?php
      require('template/header.php');
    ?>

    <!-- ========== main body section ============ -->
    <div class="container-fluid main-content-box">
    <div class="container">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0 search-container">
          <?php
            $attr = array('class'=>'form','name'=>'search');
            echo form_open('search/search_class',$attr);
          ?>

          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <input type="text" name="keyword" class="form-control" placeholder="eg:basic english course" required>
          </div>

          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <select class="form-control mmlanguage" name="type">
              <option value="0"><?php echo get_lan('-- သင်တန်းများအားလုံး --','-- all class --'); ?></option>
              <?php
                $main_cats = get_main_cat();
                foreach($main_cats as $main):
              ?>
              <option value="<?php echo $main->id; ?>"><?php echo get_lan($main->cat_name,$main->cat_name_en); ?></option>
              <?php
                endforeach;
              ?>
            </select>
          </div>

          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <select name="region" class="form-control mmlanguage">
              <option value="0"><?php echo get_lan('-- နေရာအားလုံး --','-- all place --'); ?></option>
              <?php
                $regions = get_region();
                foreach($regions as $region):
              ?>
              <option value="<?php echo $region->region_id; ?>"><?php echo $region->region_name; ?></option>
              <?php
                endforeach;
              ?>
            </select>
          </div>

          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <input type="submit" class="form-control btn btn-primary" value="Search">
          </div>
        <?php echo form_close(); ?>
      </div>
      <!-- ========= content body ======== -->
      	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0 search-content">
        	<?php
            if(!empty($search_info)){
        		  foreach($search_info as $search):
        			 $id = $search->id + 50009;
        	?>
          	<a href="<?php echo base_url(); ?>subject/detail/<?php echo slug_url($search->subject_name); ?>/<?php echo $id ?>">
  	        	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 content-item-shell">
  	        		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-item">
  	        			<div class="col-md-3 col-sm-4 padding0 img-content">
  	        				<img src="<?php echo base_url(); ?>upload/class-logo/<?php echo $search->class_img; ?>" class="img-responsive">
  	        			</div>
  	        			<div class="col-md-9 col-sm-8">
  	        				<h5><b><?php echo $search->class_name; ?></b></h5>
  	        				<font class="label-text"><?php echo $search->subject_name; ?></font><br/>
  	        				<font class="label-text"><b>Start:</b> <?php echo show_time($search->start_date); ?></font>
  	        			</div>
  	        		</div>
  	        	</div>
          	</a>
        	<?php
        		
        	  endforeach;
            }else{
          ?>
          <div class="col-md-2 col-md-offset-5 no-result">
            <h5 class="text-danger">There is no result !</h5>
          </div>
          <?php
            }
        	?>

      	</div><!--/end content body -->
    </div>
    </div><!-- /end main body -->

    <!-- =========== footer section =========== -->
    <?php
      require('template/footer.php');
    ?>
    <!-- /end footer -->

  </body>
</html>