<script src="js/sweetalert.js"></script>
<?php
session_start();

include '../include/config.php';

    if(isset($_POST['update']))
    {
      $id=$_POST['id'];
      $course=$_POST['course'];

      $qry="UPDATE course set course='$course' where id='$id' ";
      $result=mysqli_query($con,$qry);

      if($result)
      {
        echo "<script>alert('Course Update Successfully..');
        window.location.href='course.php';
        </script>";
       
      }
      else
      {
       
        echo "<script>alert('Course Not Update ..');
        window.location.href='course.php';
        </script>";
      }
      mysqli_close($con);
    }
    
    ?>