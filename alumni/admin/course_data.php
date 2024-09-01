<?php session_start();
include '../include/config.php';

if(isset($_POST['save']))
{
    $course=$_POST['course'];

    $qry="INSERT INTO course(course) Values('$course')";
    if(mysqli_query($con,$qry))
    {
        echo "<script>alert('Course Add Successfully..');
        window.location.href='course.php';
        </script>";
    }
    else
    {
        echo "<script>alert('Course Not Added..');
        window.location.href='course.php';
        </script>";
        echo mysqli_error($con);
    }
    mysqli_close($con);
}
?>