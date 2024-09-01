<?php

include '../include/config.php';

    if(isset($_POST['update']))
    {
      $id=$_POST['id'];
      $batch=$_POST['batch'];

      $qry="UPDATE batch set batch='$batch' where id='$id' ";
      $result=mysqli_query($con,$qry);

      if($result)
      {
        echo "<script>alert('Batch Update Successfully..');
        window.location.href='batch.php';
        </script>";

      }
      else
      {
        echo "<script>alert('Batch Not Update ..');
        window.location.href='batch.php';
        </script>";
      }
      mysqli_close($con);
    }
    
    ?>