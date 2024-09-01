<?php

include '../include/config.php';

    if(isset($_POST['update']))
    {
      $id=$_POST['id'];
      $status=$_POST['status'];

      $qry="UPDATE user set status='$status' where id='$id' ";

      //echo $qry; exit;
      $result=mysqli_query($con,$qry);

      if($result)
      {
        header("Location:alumni_list.php");

      }
      else
      {
        echo "error";
      }
      mysqli_close($con);
    }
    
    ?>