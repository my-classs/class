<div class="container-fluid header-bar padding0">
      
  <div class="container padding0 ">
    <div class="col-md-10">
      <span class="main-header">
        <span class="fa fa-book" aria-hidden="true"></span>&nbsp;Class.com.mm
      </span>
    </div>
    <div class="pull-right col-md-2">
      <form action="" method="POST">
        <input type="hidden" name="lan" value="0" />
        <input type="submit" name="submit" value=" " class="lang en">
      </form>
      <form action="" method="POST">
        <input type="hidden" name="lan" value="1" />
        <input type="submit" name="submit" value=" " class="lang mm">
      </form>
    </div>
  </div>

</div>

<div class="container-fluid menu padding0">
  <!-- ======== menu bar ======== -->
  <div class="container padding0">
      
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding0">
        <ul class="nav navbar-nav mmlanguage padding0">
          <li><a href="<?php echo base_url(); ?>"><?php echo get_lan('ပင်မစာမျက်နှာ','Home'); ?></a></li>
          <li style="display:none;"><a href="#"><?php echo get_lan('မကြာမီဖွင့်မည့် သင်တန်းများ','Coming Soon'); ?></a></li> 
          <li><a href="<?php echo base_url(); ?>search"><?php echo get_lan('သင်တန်းများ ရှာရန်','Find Subjects'); ?></a></li> 
          <li style="display:none;"><a href="#"><?php echo get_lan('ပညာရေး အချက်အလက်များ','Educational'); ?></a></li>
          <li style="display:none;"><a href="#"><?php echo get_lan('ဆောင်းပါးများ','Artical'); ?></a></li>
          <li><a href="<?php echo base_url(); ?>contact-us"><?php echo get_lan('ဆက်သွယ်ရန်','Contact Us'); ?></a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <?php
            if(@$_SESSION['user_id']){
          ?>
          <div class="dropdown pull-right">
            <button onclick="myFunction()" class="dropbtn">
              <span class="glyphicon glyphicon-user"></span>
              &nbsp;<?php echo @$_SESSION['user_name']; ?>
              <span class="caret"></span>
            </button>
            <div id="myDropdown" class="dropdown-content">
              <li><a href="<?php echo base_url().@$_SESSION['url']; ?>"><?php echo get_lan('My Dashboard','My Dashboard'); ?></a></li>
              <li><a href="<?php echo base_url(); ?>logout.html"><?php echo get_lan('Logout','Logout'); ?></a></li>
            </div>
          </div>
          <?php
            }else{
          ?>
          <li><a href="<?php echo base_url(); ?>register.html"><?php echo get_lan('Register','Register'); ?></a></li>
          <li><a href="<?php echo base_url(); ?>login.html"><?php echo get_lan('Login','Login'); ?></a></li>
          <?php
            }
          ?>
        </ul>
    </div>

  </div>
</div>
<script>
  /* When the user clicks on the button,
  toggle between hiding and showing the dropdown content */
  function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
  }

  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {

      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
</script>