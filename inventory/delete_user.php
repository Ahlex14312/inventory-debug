<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(1);
?>
<?php
 $id=$_GET['id']; 
$sql = "INSERT INTO disabledusers(`id`,`name`,`username`,`password`,`user_level`,`image`,`status`) SELECT id,name,username,password,user_level,image,status FROM users WHERE id='$id'";

$result = $db->query($sql);
  $delete_id = delete_by_id('users',(int)$_GET['id']);
  if($delete_id){
      $session->msg("s","User Disabled sucessfully.");

  
  
     
          
redirect("seedisabledusers.php");


      
    
  }  


?>
