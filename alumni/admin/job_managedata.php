<?php
include '../include/config.php';

    if(isset($_POST['update']))
    {
      $id=$_POST['id'];
      $company=$_POST['company'];
      $title=$_POST['title'];
      $location=$_POST['location'];
      $description=$_POST['description'];

      $qry="UPDATE job set company='$company',title='$title',location='$location',description='$description' where id='$id' ";
      $result=mysqli_query($con,$qry);

      if($result)
      {
        echo "<script>alert('Job Update Successfully..');
        window.location.href='job_list.php';
        </script>";
    } else {
      echo "<script>alert('Job Not Updated.. ');
        window.location.href='job_list.php';
        </script>";
      }
      mysqli_close($con);
    }
    
    ?>
