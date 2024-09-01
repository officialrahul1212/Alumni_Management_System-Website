<?php 
include '../include/config.php';

if(isset($_POST['save']))
{
    $description=$_POST['description'];
    $filename=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];
    $folder="./img/".$filename;

    $qry="INSERT INTO gallery(image,description) Values('$filename','$description')";

    if(mysqli_query($con, $qry) && move_uploaded_file($tempname, $folder))
    {
        echo "<script>alert('Record Insert Successfylly..');
        window.location.href='gallery.php';
        </script>";
    
    }
    else
    {
        echo "<script>alert('Record Not Insert ..');
        window.location.href='gallery.php';
        </script>";
        echo mysqli_error($con);
    }
    mysqli_close($con);
}
?>