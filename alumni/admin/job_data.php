
<?php
include 'include/config.php';


if(isset($_POST['save']))
{
    $company=$_POST['company'];
    $title=$_POST['title'];
    $location=$_POST['location'];
    $description=$_POST['description'];
   $postedby=$_POST['postedby'];


    $qry="INSERT INTO job(company,title,location,description,postedby) 
    VALUES('$company','$title','$location','$description','$postedby')";

    if(mysqli_query($con,$qry))
    {
        echo "<script>alert('Job Post successfully');
        window.location.href='job.php';
        </script>";
      
    }
    else 
    {
       
        echo mysqli_error($con);
    }
    mysqli_close($con);
}
?>