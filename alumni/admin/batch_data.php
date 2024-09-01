<?php 
include '../include/config.php';

if(isset($_POST['save']))
{
    $batch=$_POST['batch'];

    $qry="INSERT INTO batch(batch) Values('$batch')";
    if(mysqli_query($con,$qry))
    {
        echo "<script>alert('Add Batch/Year Successfully..');
        window.location.href='batch.php';
        </script>";

      }
      else
      {
        echo "<script>alert('Batch Not Addes ..');
        window.location.href='batch.php';
        </script>";
        echo mysqli_error($con);
    }
    mysqli_close($con);
}
?>