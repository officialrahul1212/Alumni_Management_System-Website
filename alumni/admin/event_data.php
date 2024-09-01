
<?php
include '../include/config.php';


if(isset($_POST['save']))
{
    $event=$_POST['event'];
    $schedule=$_POST['schedule'];
    // $image=$_POST['image'];
    $description=$_POST['description'];
   
    $filename=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];
    $folder="./img/".$filename;

    $qry="INSERT INTO event(event,schedule,description,image) 
    VALUES('$event','$schedule','$description','$filename')";

    if(mysqli_query($con, $qry) && move_uploaded_file($tempname, $folder))
    {
        echo "<script>alert('Event Add Successfylly..');
        window.location.href='events.php';
        </script>";
    
    }
    else
    {
        echo "<script>alert('Event Not Added ..');
        window.location.href='events.php';
        </script>";
        echo mysqli_error($con);
    }
    mysqli_close($con);
}
?>