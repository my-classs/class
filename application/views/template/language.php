<?php

  $value = "";

  if(isset($_POST['submit'])){

    $value = $_POST['lan'];
    $this->session->lan = $value;
    
  }

?>