<?php

include '../include/config.php';

    if(isset($_POST['generate']))
    {
      $id=$_POST['id'];
   
     
      // $amount=$_POST['amount'];
      $receipt_date=$_POST['receipt_date'];
      $status=$_POST['status'];


      $qry="UPDATE donations set receipt_date='$receipt_date',status='$status' where id='$id' ";
      // $result=mysqli_query($con,$qry);

      if(mysqli_query($con, $qry))
      {
       
        echo "<script>alert('Generate Receipt Successfully..');
        window.location.href='donations.php';
        </script>";
    } else {
        echo "<script>alert(' Receipt Not Generate.. ');
        window.location.href='donations.php';
        </script>";
      }
      mysqli_close($con);
    }
    
    ?>