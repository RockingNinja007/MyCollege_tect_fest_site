<?php
  include_once "register-manager.php";
    $app = new Application();
   $to_reg_table_name = $_REQUEST["register_to"];
   $participants_name = $_POST["name"];
   $participants_roll = $_POST["roll_no"];
   $participants_college = $_POST["clg_name"];
   $participants_e_mail = $_POST["e_mail"];
   $participants_mobile= $_POST["mob"];
   $participants_sem = $_POST["sem"];

   if(strlen($participants_name) <=4){
      header("Location:../register_view/register.php?registry_msg=1");
    }
    else if(!(strlen($participants_roll)<=13)){
      header("Location:../register_view/register.php?registry_msg=2");
      //echo strlen($participants_roll) ;
    }
    else if(!filter_var($participants_e_mail, FILTER_VALIDATE_EMAIL)){
      header("Location:../register_view/register.php?registry_msg=3");
    }
    else if(strlen($participants_mobile)!=10)
    {
      header("Location:../register_view/register.php?registry_msg=4");
    }
    else{
      $query = sprintf("INSERT INTO %s (participant_name,college_name,roll_no,email,semester,mobile) values('%s','%s','%s','%s','%s','%s')",
      $to_reg_table_name,$participants_name,$participants_college,$participants_roll,$participants_e_mail,$participants_sem,$participants_mobile);

      $res = $app->updateQuery($query);
      if($res){
        header("Location:../register_view/register.php?registry_msg=99");
      }
      else {
        header("Location:../register_view/register.php?registry_msg=90");
      }
    }

 ?>
