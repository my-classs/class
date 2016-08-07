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

            <li class="menu-item"><a href="<?php echo base_url().$_SESSION['url']; ?>">Profile</a></li>

            <li class="menu-header" style="margin-top: 50px;">Manage Class</li>
            <li class="menu-item" id="current"><a href="<?php echo base_url(); ?>dashboard/add-class-info.html">Add Class Info</a></li>
            <li class="menu-item"><a href="<?php echo base_url(); ?>dashboard/manage-subject">Subject</a></li>
            
          </ul>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 padding0">
          <div class="col-md-12" id="content"> 

              <div class="col-md-12">
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-md-offset-1">
                  <h3>Upload Class Information</h3>
                  <?php
                    echo $this->session->flashdata('add-class');
                    $attr_info = array('class'=>'form','name'=>'class_info');
                    echo form_open_multipart('dashboard/add_class_info',$attr_info);

                    if(@$class_info){
                      $post_type = "update";

                      foreach($class_info as $class){
                        $class_name = $class->class_name;
                        $class_desc = $class->class_spec;
                        $class_phone = $class->phone;
                        $class_email = $class->email;
                        $class_address = $class->address;
                        $class_cat = $class->main_cat;
                        $class_region = $class->region;
                      }

                    }
                    else{
                      $post_type = "save";

                      $class_name = get_classname_by_userid($_SESSION['user_id']);
                      $class_desc = set_value('desc');
                      $class_email = set_value('contact-email');
                      $class_phone = set_value('contact-phone');
                      $class_address = set_value('contact-address');
                    }

                    
                  ?>
                  <div class="col-md-12 padding0">
                    <div class="col-md-3 padding0">
                      <label for="class-name" class="mmlanguage"><?php echo get_lan('သင်တန်း အမည်','Class Name'); ?> :</label>
                    </div>
                    <div class="col-md-9 padding0">
                      <input type="text" name="class-name" class="form-control" value="<?php echo $class_name; ?>" readonly>
                      <span class="text-danger"><?php echo form_error('class-name'); ?></span><br/>
                    </div>
                  </div>

                  <div class="col-md-12 padding0">
                    <div class="col-md-3 padding0">
                      <label for="logo" class="mmlanguage"><?php echo get_lan('လိုဂို တင်ရန်','Logo Image') ?> :</label>
                    </div>
                    <div class="col-md-9 padding0">
                      <input type="file" name="logo" class="form-control">
                      <span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span><br/>
                    </div>
                  </div>

                  <div class="col-md-12 padding0">
                    <div class="col-md-3 padding0">
                      <label for="contact-phone" class="mmlanguage"><?php echo get_lan('ဆက်သွယ်ရန် ဖုန်းနံပါတ်','Contact Phone'); ?> :</label>
                    </div>
                    <div class="col-md-9 padding0">
                      <input type="text" name="contact-phone" class="form-control" value="<?php echo $class_phone; ?>">
                      <span class="text-danger"><?php echo form_error('contact-phone'); ?></span><br/>
                    </div>
                  </div>

                  <div class="col-md-12 padding0">
                    <div class="col-md-3 padding0">
                       <label for="contact-email" class="mmlanguage"><?php echo get_lan('ဆက်သွယ်နိုင်သော အီးမေးလ်','Contact Email') ?> :</label>
                    </div>
                    <div class="col-md-9 padding0">
                      <input type="email" name="contact-email" class="form-control" value="<?php echo $class_email; ?>">
                      <span class="text-danger"><?php echo form_error('contact-email'); ?></span><br/>
                    </div>
                  </div>

                  <div class="col-md-12 padding0">
                    <div class="col-md-3 padding0">
                      <label for="contact-address" class="mmlanguage"><?php echo get_lan('ဆက်သွယ်ရန် လိပ်စာ','Contact Address'); ?> :</label>
                    </div>
                    <div class="col-md-9 padding0">
                      <input type="text" name="contact-address" class="form-control" value="<?php echo $class_address; ?>">
                      <span class="text-danger"><?php echo form_error('contact-address'); ?></span><br/>
                    </div>
                  </div>

                  <div class="col-md-12 padding0">
                    <div class="col-md-3 padding0">
                      <label for="desc" class="mmlanguage"><?php echo get_lan('သင်တန်းအကြောင်း ဖော်ပြမည်','Description'); ?> :</label>
                    </div>
                    <div class="col-md-9 padding0">
                      <textarea rows="10" name="desc" class="form-control"><?php echo $class_desc; ?></textarea>
                      <span class="text-danger"><?php echo form_error('desc'); ?></span><br/>
                    </div>
                  </div>

                  <div class="col-md-12 padding0">
                    <div class="col-md-3 padding0">
                      <label for="main-cat" class="mmlanguage"><?php echo get_lan('သင်တန်း အမျိုးအစား','Class Category'); ?> :</label>
                    </div>
                    <div class="col-md-9 padding0">
                      <select name="main-cat" class="form-control mmlanguage">
                        <?php
                          $value = get_main_cat();
                          foreach($value as $cat):
                            if($cat->id == $class_cat){
                              $select = 'selected';
                            }
                            else{
                              $select = '';
                            }
                        ?>
                        <option value="<?php echo $cat->id; ?>" <?php echo $select; ?>><?php echo $cat->cat_name; ?></option>
                        <?php
                          endforeach;
                        ?>
                      </select>
                    <span class="text-danger"><?php echo form_error('main-cat'); ?></span><br/>
                    </div>
                  </div>

                  <div class="col-md-12 padding0">
                    <div class="col-md-3 padding0">
                      <label for="region" class="mmlanguage"><?php echo get_lan('နေရာဒေသ','Region') ?> :</label>
                    </div>
                    <div class="col-md-9 padding0">
                      <select name="region" class="form-control mmlanguage">
                        <?php
                          $regions = get_region();
                          foreach($regions as $region):
                            if($region->region_id == $class_region){
                              $select = 'selected';
                            }
                            else{
                              $select = '';
                            }
                        ?>
                        <option value="<?php echo $region->region_id; ?>" <?php echo $select; ?>><?php echo $region->region_name; ?></option>
                        <?php
                          endforeach;
                        ?>
                      </select>
                      <span class="text-danger"><?php echo form_error('region'); ?></span><br/>
                    </div>
                  </div>

                  <input type="submit" name="class-info" value="<?php echo ucfirst($post_type); ?>" class="form-control btn btn-primary">
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