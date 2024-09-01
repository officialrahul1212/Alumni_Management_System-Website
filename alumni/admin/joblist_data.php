
<?php
include '../include/config.php';


if(isset($_POST['save']))
{
    $company=$_POST['company'];
    $title=$_POST['title'];
    $location=$_POST['location'];
    $description=$_POST['description'];
   $postby=$_POST['postedby'];


    $qry="INSERT INTO job(company,title,location,description,postedby) 
    VALUES('$company','$title','$location','$description','$postby')";

    if(mysqli_query($con,$qry))
    {
    
        echo "<script>alert('Job Add Successfylly..');
        window.location.href='job_list.php';
        </script>";
    
    }
    else
    {
        echo "<script>alert('Job Not Added ..');
        window.location.href='job_list.php';
        </script>";
        echo mysqli_error($con);
    }
    mysqli_close($con);
}
?>