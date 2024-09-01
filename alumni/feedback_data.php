
<?php
include 'include/config.php';


if(isset($_POST['submit']))
{
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $email=$_POST['email'];
    $name=$_POST['name'];


    $qry="INSERT INTO feedback(subject,message,email,name) 
    VALUES('$subject','$message','$email','$name')";

    if(mysqli_query($con, $qry))
    {
        echo "<script>alert('record insert Successfully');
        window.location.href='feedback.php';
        </script>";
    
    }
    else
    {
       
        echo mysqli_error($con);
    }
    mysqli_close($con);
}
?>