<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/admin_home.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/admin-index.css">
    
  </head>
  <body>
     
    <div class="container-fluid header-bar navbar-fixed-top">
      
      <span class="navbar-brand"><span class="fa fa-book" aria-hidden="true"></span>&nbsp;<i>Class.com.mm</i></span>

      <div class="pull-right admin-logout">
        <?php 
          $attr = array('class' => 'form','name' => 'logout'); 
          echo form_open('admin/dashboard/logout');
        ?>
          <input type="submit" name="logout" value="Logout" class="btn btn-default">
        <?php
          echo form_close();
        ?>
      </div>
    </div>
     
    <div class="container-fluid main-content"> 
      <div class="col-md-12 padding0">
        <div class="col-md-2 padding0">
          <li class="menu-header">View Register User</li>
          <ul id="tabs">

            <li class="menu-item"><a href="#" name="tab1">Computer / IT </a></li>
            <li class="menu-item"><a href="#" name="tab2">Marketing </a></li>
          

            <li class="menu-header" style="margin-top: 50px;">View Contact User</li>
            <li class="menu-item"><a href="#" name="tab3">Inbox </a></li>
            <li class="menu-item"><a href="#" name="tab4">Reply </a></li>
            <li class="menu-item"><a href="#" name="tab5">No Reply</a></li>

            <li class="menu-header" style="margin-top: 50px;">Job Title / Category</li>
            <li class="menu-item"><a href="#" name="tab6">Manage Job Title / Category</a></li>

            <li class="menu-header" style="margin-top: 50px;"><span class="glyphicon glyphicon-list"></span>&nbsp;Category</li>
            <li class="menu-item"><a href="#" name="tab6">Add Main Category</a></li>
            <li class="menu-item"><a href="#" name="tab7">Edit Main Category</a></li>
            <li class="menu-item"><a href="#" name="tab8">Add Sub Category</a></li>
            <li class="menu-item"><a href="#" name="tab9">Edit Sub Category</a></li>

          </ul>

        </div>
        <div class="col-md-10 padding0" style="border: 1px solid silver;">
          <div class="col-md-12" id="content"> 

              <div class="col-md-12" id="tab1">
                <table class="table">
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Job Title</th>
                    <th>Register Date</th>
                    <th></th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Kyaw Min Htwe</td>
                    <td>kyawminhtwe107@gmail.com</td>
                    <td>09-261779772</td>
                    <td>Computer / IT</td>
                    <td>2016-May-10</td>
                    <td>
                      <a href="detail" id="btn"><span class="glyphicon glyphicon-th"></span>&nbsp;<span>Detail</span></a>&nbsp;
                      <a href="edit" id="btn"><span class="glyphicon glyphicon-edit"></span>&nbsp;<span>Edit</span></a>&nbsp;
                      <a href="#" id="btn" onclick="confirm('are you sure want to delete this ?')"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span>Delete</span></a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Kyaw Min Htwe</td>
                    <td>kyawminhtwe107@gmail.com</td>
                    <td>09-261779772</td>
                    <td>Computer / IT</td>
                    <td>2016-May-10</td>
                    <td>
                      <a href="detail" id="btn"><span class="glyphicon glyphicon-th"></span>&nbsp;<span>Detail</span></a>&nbsp;
                      <a href="edit" id="btn"><span class="glyphicon glyphicon-edit"></span>&nbsp;<span>Edit</span></a>&nbsp;
                      <a href="#" id="btn" onclick="confirm('are you sure want to delete this ?')"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span>Delete</span></a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Kyaw Min Htwe</td>
                    <td>kyawminhtwe107@gmail.com</td>
                    <td>09-261779772</td>
                    <td>Computer / IT</td>
                    <td>2016-May-10</td>
                    <td>
                      <a href="detail" id="btn"><span class="glyphicon glyphicon-th"></span>&nbsp;<span>Detail</span></a>&nbsp;
                      <a href="edit" id="btn"><span class="glyphicon glyphicon-edit"></span>&nbsp;<span>Edit</span></a>&nbsp;
                      <a href="#" id="btn" onclick="confirm('are you sure want to delete this ?')"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span>Delete</span></a>
                    </td>
                  </tr>
                </table>
              </div>

              <div class="col-md-12" id="tab2">
                <table class="table">
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Job Title</th>
                    <th>Register Date</th>
                    <th></th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Kyaw Min Htwe</td>
                    <td>kyawminhtwe107@gmail.com</td>
                    <td>09-261779772</td>
                    <td>Computer / IT</td>
                    <td>2016-May-10</td>
                    <td>
                      <a href="detail" id="btn"><span class="glyphicon glyphicon-th"></span>&nbsp;<span>Detail</span></a>&nbsp;
                      <a href="edit" id="btn"><span class="glyphicon glyphicon-edit"></span>&nbsp;<span>Edit</span></a>&nbsp;
                      <a href="#" id="btn" onclick="confirm('are you sure want to delete this ?')"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span>Delete</span></a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Kyaw Min Htwe</td>
                    <td>kyawminhtwe107@gmail.com</td>
                    <td>09-261779772</td>
                    <td>Computer / IT</td>
                    <td>2016-May-10</td>
                    <td>
                      <a href="detail" id="btn"><span class="glyphicon glyphicon-th"></span>&nbsp;<span>Detail</span></a>&nbsp;
                      <a href="edit" id="btn"><span class="glyphicon glyphicon-edit"></span>&nbsp;<span>Edit</span></a>&nbsp;
                      <a href="#" id="btn" onclick="confirm('are you sure want to delete this ?')"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span>Delete</span></a>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Kyaw Min Htwe</td>
                    <td>kyawminhtwe107@gmail.com</td>
                    <td>09-261779772</td>
                    <td>Computer / IT</td>
                    <td>2016-May-10</td>
                    <td>
                      <a href="detail" id="btn"><span class="glyphicon glyphicon-th"></span>&nbsp;<span>Detail</span></a>&nbsp;
                      <a href="edit" id="btn"><span class="glyphicon glyphicon-edit"></span>&nbsp;<span>Edit</span></a>&nbsp;
                      <a href="#" id="btn" onclick="confirm('are you sure want to delete this ?')"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span>Delete</span></a>
                    </td>
                  </tr>
                </table>
              </div>

              <div id="tab3">All contact User List</div>
              <div id="tab4">All contact Reply User List</div>
              <div id="tab5">All contact No reply User List</div>


        <!-- category section tab group -->
              <!-- add main category tab -->
              <div class="col-md-12" id="tab6">
                <div class="col-md-4 col-md-offset-4 cat-shell">
                  <h4 class="text-center">Add Mian Category</h4>
                  <?php
                    echo $this->session->flashdata('admin-msg');
                    $attr = array('class' => 'form','name' => 'add-main-cat');
                    echo form_open_multipart('admin/category/add_main_cat',$attr);
                  ?>
                  <label for="cat_name" class="label-control">Category(myanmar)</label>
                  <input type="text" name="cat_name" value="<?php  ?>" class="form-control mmlanguage" placeholder="name myanmar(unicode)">
                  <span class="text-danger"><?php echo form_error('cat_name'); ?></span><br/>

                  <label for="cat_name_en" class="label-control">Category(English)</label>
                  <input type="text" name="cat_name_en" value="<?php echo set_value('cat_name_en'); ?>" class="form-control" placeholder="name english">
                  <span class="text-danger"><?php echo form_error('cat_name_en'); ?></span><br/>

                  <label for="image">Image :</label>
                  <input type="file" name="image" size="20" />
                  <span class="text-danger"><?php form_error('image'); ?></span>

                  <input type="submit" name="add" value="Add" class="col-md-12 btn btn-primary">
                  <?php
                    echo form_close();
                  ?>
                </div>
              </div><!-- /end add main category -->

              <!-- edit main cat section -->
              <div class="col-md-12" id="tab7">
                <table class="table">

                  <tr>
                    <th>No</th>
                    <th>Title(Myanmar)</th>
                    <th>Title(English)</th>
                    <th></th>
                  </tr>
                  <?php
                    $x="";
                    $cats = get_main_cat();
                    foreach($cats as $cat):
                      $x = $x +1;

                  ?>
                  <tr>
                    <td><?php echo $x; ?></td>
                    <td class="mmlanguage"><?php echo $cat->cat_name; ?></td>
                    <td><?php echo $cat->cat_name_en; ?></td>
                    <td>
                      <a href="#" id="btn" class="edit"><span class="glyphicon glyphicon-edit"></span>&nbsp;<span>Edit</span></a>&nbsp;
                      <a href="#" id="btn" onclick="confirm('are you sure want to delete this ?')"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span>Delete</span></a>
                    </td>
                  </tr>
                  <tr class="cat-main-edit">
                    <?php
                      echo form_open('admin/category/edit_main_cat');
                    ?>
                    <td><img src="<?php echo base_url(); ?>img/cancel.png" class="cancel"></td>
                    <td class="mmlanguage">
                      <input type="text" name="cat_name" value="<?php echo $cat->cat_name; ?>" class="form-control mmlanguage" placeholder="Unicode">
                    </td>

                    <td>
                      <input type="text" name="cat_name_en" value="<?php echo $cat->cat_name_en; ?>" class="form-control">
                    </td>
                    <td>
                      <input type="hidden" name="cat_id" value="<?php echo $cat->id; ?>">
                      <input type="submit" name="edit" value="Save" class="btn btn-danger col-md-6">
                    </td>
                    <?php
                      echo form_close();
                    ?>
                  </tr>
                  <?php
                    endforeach;
                  ?>
                 
                </table>
              </div>
              <!-- /end edit main cat -->

              <!-- add sub category tab -->
              <div class="col-md-12" id="tab8">
                <div class="col-md-4 col-md-offset-4 cat-shell">
                  <h4 class="text-center">Add Sub Category</h4>
                  <?php
                    echo $this->session->flashdata('admin-msg');
                    $attr = array('class' => 'form','name' => 'add-sub-cat');
                    echo form_open('admin/category/add_sub_cat',$attr);
                  ?>
                  <label for="sub_name" class="label-control">Category(myanmar)</label>
                  <input type="text" name="sub_name" value="<?php  ?>" class="form-control mmlanguage" placeholder="name myanmar(unicode)">
                  <span class="text-danger"><?php echo form_error('sub_name'); ?></span><br/>

                  <label for="sub_name_en" class="label-control">Category(English)</label>
                  <input type="text" name="sub_name_en" value="<?php echo set_value('sub_name_en'); ?>" class="form-control" placeholder="name english">
                  <span class="text-danger"><?php echo form_error('sub_name_en'); ?></span><br/>

                  <label for="main_cat">Main Category:</label>
                  <select class="form-control mmlanguage" name="main_cat">
                    <?php
                      $val = get_main_cat();
                      foreach($val as $main):
                    ?>
                    <option value="<?php echo $main->id; ?>"><?php echo get_lan($main->cat_name,$main->cat_name_en); ?></option>
                    <?php
                      endforeach;
                    ?>
                  </select>
                  <span class="text-danger"><?php echo form_error('main_cat'); ?></span><br/>

                  <input type="submit" name="add" value="Add" class="col-md-12 btn btn-primary">
                  <?php
                    echo form_close();
                  ?>
                </div>
              </div><!-- /end add sub category -->

              <!-- edit sub cat section -->
              <div class="col-md-12" id="tab9">
                <table class="table">

                  <tr>
                    <th>No</th>
                    <th>Title(Myanmar)</th>
                    <th>Title(English)</th>
                    <th>Main Title</th>
                  </tr>
                  <?php
                    $x="";
                    $sub_cats = get_sub_cat();
                    foreach($sub_cats as $sub_cat):
                      $x = $x +1;

                  ?>
                  <tr>
                    <td><?php echo $x; ?></td>
                    <td class="mmlanguage"><?php echo $sub_cat->sub_name; ?></td>
                    <td><?php echo $sub_cat->sub_name_en; ?></td>
                    <td class="mmlanguage">
                      <?php
                        $main = get_main_name($sub_cat->main_cat);
                        foreach($main as $main_cat){
                          echo get_lan($main_cat->cat_name,$main_cat->cat_name_en);
                        }
                      ?>
                    </td>
                    <td>
                      <a href="#" id="btn" class="edit"><span class="glyphicon glyphicon-edit"></span>&nbsp;<span>Edit</span></a>&nbsp;
                      <a href="#" id="btn" onclick="confirm('are you sure want to delete this ?')"><span class="glyphicon glyphicon-trash"></span>&nbsp;<span>Delete</span></a>
                    </td>
                  </tr>
                  <tr class="cat-main-edit">
                    <?php
                      echo form_open('admin/category/edit_sub_cat');
                    ?>
                    <td><img src="<?php echo base_url(); ?>img/cancel.png" class="cancel"></td>
                    <td class="mmlanguage">
                      <input type="text" name="sub_name" value="<?php echo $sub_cat->sub_name; ?>" class="form-control mmlanguage" placeholder="Unicode">
                    </td>

                    <td>
                      <input type="text" name="sub_name_en" value="<?php echo $sub_cat->sub_name_en; ?>" class="form-control">
                    </td>

                    <td class="mmlanguage">
                      <select class="form-control" name="main_cat">
                        <?php
                          if($sub_cat->main_id){
                            $main = get_main_name($sub_cat->main_cat);
                            foreach($main as $main_cat){
                        ?>
                            <option value="<?php echo $main_cat->id; ?>"><?php echo get_lan($main_cat->cat_name,$main_cat->cat_name_en);?></option>
                        <?php
                            }
                          }
                          else{

                            $val = get_main_cat();
                            foreach($val as $main):
                        ?>
                            <option value="<?php echo $main->id; ?>"><?php echo get_lan($main->cat_name,$main->cat_name_en); ?></option>
                        <?php
                            endforeach;
                          }
                        ?>
                      </select>
                    </td>

                    <td>
                      <input type="hidden" name="sub_id" value="<?php echo $sub_cat->sub_id; ?>">
                      <input type="submit" name="edit" value="Save" class="btn btn-danger col-md-6">
                    </td>
                    <?php
                      echo form_close();
                    ?>
                  </tr>
                  <?php
                    endforeach;
                  ?>
                 
                </table>
              </div>
              <!-- /end sub main cat -->

        <!-- /end category tab group -->
          </div>
        </div>
      </div>
    </div>
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/dynamic_tab.js"></script>
  </body>
</html>
