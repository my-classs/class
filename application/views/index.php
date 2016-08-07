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
    <title>Class.com.mm | Myanmar Online Education Network</title>

    <?php require('template/common.php'); ?>
    
  </head>
  <body>

    <?php require('template/header.php'); ?>

<!-- tempory close above section-->
    <div class="container-fluid slider-box">
      <div class="container">
        <span class="header-text text-center" style="display:none;">Release Your Time With Us</span>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 search_box">
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

          <?php
            echo form_close();
          ?>
        </div>
      </div>
    </div>

    <!-- ========== main body section ============ -->
    <div class="container-fluid main-content-box">

      <div class="container padding0">
        <!-- ========= content body ======== -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content">

            <?php
              $header_mm = '<h4> Class.com.mm မွ ႀကိဳဆိုပါတယ္</h4>';
              $header_en = '<h4>Welcome to Class.com.mm</h4>';

              $content_en = '<p> We are Myanmar’s online education network, helping the students to find the right professional Class and can easily make enrollment for their essential workplace skills.</p>
                <p>Whether you are seeking Language course, Accounting course, Management course, Marketing course, IT & Computer course, Engineer course or Mobile technology course, you can browse and enroll your class through Class.com.mm.</p>';

              $content_mm = '<p class="mmlanguage">ကျွန်တော်တို ့၏ Class.com.mm မှ ကျောင်းသူကျောင်းသားများ၊ လုပ်ငန်းခွင်ဝင်နေပြီးသူများ၊လုပ်ငန်းခွင် ၀င်ရန် ပြင်ဆင်နေသူများ၊ မိမိ၏သားသမီးများအတွက် သင့်တော်မည့်ကျောင်းကို ရွေးချယ်ရန်ရှာဖွေနေသူများ အတွက် သင်တန်းကျောင်းများ၏ ဖွင့်လှစ်ချိန်များ၊ သင်တန်းအချိန်ဇယားများ၊ သင်တန်းနေရာများနှင့် သင်တန်းအချက်အလက် များကို အချိန်နှင့်တပြေးညီသိရှိစေရန် Website, Monthly Journal, Facebook, Mobile Application နှင့် Call Center Service စသည့် Media အခန်းကဏ္ဍပေါင်းစုံဖြင့် ၀န်ဆောင်မှုပေးလျှက်ရှိပါသည်။ Website ကဏ္ဍတွင် အချိန်နှင့်တပြေးညီ ဖွင့်လှစ်တော့မည့် သင်တန်းများ၊ ကျောင်းများ၊ ကျူရှင်များ၏ သတင်းအချက် အလက်များကို စဉ်ဆက်မပြတ် ရှာဖွေကြည့်ရှနိုင်ရန် စီစဉ်ထားပါသည်။ ထို ့အပြင် သင်တန်းပေါင်းစုံ၏ ဆက်သွယ်ရန် လိပ်စာများ၊ ပညာရေးပွဲများ၊ ပညာရေးဆောင်းပါးများနှင့် အင်တာဗျူးကဏ္ဍများကိုလည်း ၀င်ရောက်ကြည့်ရှုနိုင်ပါသည်။ Journal ကဏ္ဍတွင် ဖွင့်လှစ်မည့်သင်တန်းကျောင်းများ၏ Information အပြည့်အစုံများကို သိရှိစေရန်သာမက ဘဝတိုး တက်ရေး လမ်းညွှန်ဆောင်းပါးများ၊ အနုပညာသမားနှင့် အခြားအောင်မြင်ကျော်ကြားသူတို ့၏ Interview များ၊ Educational Talk များကို စုံလင်စွာဖတ်ရှု ့ရမည့်အပြင် ကျောင်းတစ်ကျောင်းချင်းစီ၏ Scholarship Program များနှင့် ရရှိနိုင်မည့် အကျိူးကျေးဇူးများကိုလည်း သိရှိနားလည်နိုင်မည်ဖြစ်ပါသည်။ Mobile Application နှင့် Facebook ကဏ္ဍတွင်လည်း Journal နှင့် Website များ၏ကဏ္ဍနှင့်အလားတူ အချိန်နှင့်တစ် ပြေးညီဖော်ပြပေးနေပါသည်။ Call Center Service တွင် Online Educational Service ၏ ကဏ္ဍအသီးသီးတွင် ပါ၀င်သော သတင်းအချက်အလက် များကို ရုံးချိန်အတွင်း ကူညီဆောင်ရွက်ဖြေကြားပေးနေပါသည်။</p>';

              echo get_lan($header_mm,$header_en);
              echo get_lan($content_mm,$content_en);
            ?>
      <!-- ============= select category ============== -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0 category">
              <h3>Class Categories</h3>
              <?php  
                $main_cats = get_main_cat();
                
                foreach($main_cats as $main_cat):
                  $url_id = $main_cat->id + 109;
              ?>
              <a href="<?php echo base_url() ?>courses/<?php echo $url_id; ?>/<?php echo slug_url($main_cat->cat_name_en); ?>/" title="<?php echo get_lan($main_cat->cat_name,$main_cat->cat_name_en); ?>">
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mmlanguage cat-item">
                  <span class="cat-label"><?php echo get_lan($main_cat->cat_name,$main_cat->cat_name_en); ?></span>
                </div>
              </div>
              </a>
              <?php
                endforeach;
              ?>
            </div>
      <!-- /end select category -->

      <!-- ================ retrive class ================ -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0 class-row">
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0 class-header">
             <h3>Most Popular Class in Class.com.mm</h3>
           </div>
          <?php
            $class_url_id = "";
            foreach($classes as $class):

              $class_url_id = $class->class_id + 1700;
          ?>
          <div class="col-xs-12 col-col-sm-4 col-md-3 col-lg-3 class-item-box">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0 class-item" style="display:none;">
              <img src="<?php echo base_url(); ?>upload/class-logo/<?php echo $class->class_img; ?>" class="img-responsive" alt="<?php echo $class->class_name; ?>">
            </div>
            <h5><b><span class="glyphicon glyphicon-tree-conifer"></span>&nbsp;<?php echo $class->class_name; ?></b></h5>
            <h6><span class="glyphicon glyphicon-tasks"></span>&nbsp;&nbsp;<span class="mmlanguage"><?php echo get_lan($class->cat_name,$class->cat_name_en); ?></span></h6>
            <a href="<?php echo base_url(); ?>class/<?php echo slug_url($class->class_name); ?>/<?php echo $class_url_id; ?>" class="btn btn-small btn-info form-control">
              <span class="glyphicon glyphicon-eye-open"></span> &nbsp; 
              <?php echo get_lan('View','View') ?>
            </a>
          </div>
          <?php
            endforeach;
          ?>
        </div>
      <!-- /end retrive class -->


      <!-- ================== select subject category ============ -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0 subject">
          <h3>Course Subjects</h3>
          <div class="panel-group" id="accordion">
          <?php 
            $x = ''; 
            $main_cats = get_main_cat();
            foreach($main_cats as $main_cat):
              $x += 1;
              if($x == 1){
                $in = 'in';
              }
              else{
                $in = '';
              }
          ?>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title mmlanguage">
                <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo slug_url($main_cat->cat_name_en); ?>"><?php echo get_lan($main_cat->cat_name,$main_cat->cat_name_en); ?>&nbsp;<span class="caret"></span></a>
              </h4>
            </div>
            <div id="<?php echo slug_url($main_cat->cat_name_en); ?>" class="panel-body panel-collapse collapse <?php echo $in; ?>">
              <?php
                $subj_cat = get_subject($main_cat->id);
                foreach($subj_cat as $subj):
                  $subj_id = $subj->subj_id + 609;
              ?>
                <a href="<?php echo base_url() ?>subjects/<?php echo slug_url($subj->subj_name_en); ?>/<?php echo $subj_id; ?>">
                <li class="mmlanguage">
                  <?php echo get_lan($subj->subj_name,$subj->subj_name_en); ?>
                </li>
                </a>
              <?php
                endforeach;
              ?>
            </div>
            </div>
          <?php
            endforeach;
          ?>
          </div>
        </div>
        <!-- /end select subject -->
        </div>

        </div><!--/end content body -->
      </div>

    </div><!-- /end main body -->

    <!-- =========== footer section =========== -->
    <?php require('template/footer.php'); ?>
    <!-- /end footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  </body>
</html>