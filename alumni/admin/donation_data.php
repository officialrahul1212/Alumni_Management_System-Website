
<?php
include 'include/config.php';


if(isset($_POST['submit']))
{
    // $id=$_POST['id'];
    $name=$_POST['name'];
    $donateby=$_POST['donateby'];
    $contact=$_POST['contact'];
    $transaction_id=$_POST['transaction_id'];
    $amount=$_POST['amount'];

    // $filename=$_FILES['receipt']['name'];
    // $tempname=$_FILES['receipt']['tmp_name'];
    // $folder="./receipt/".$filename;


    $qry="INSERT INTO donations(name,donateby,contact,transaction_id,amount) 
    VALUES('$name','$donateby','$contact','$transaction_id','$amount')";

    if(mysqli_query($con,$qry))
    {
        echo "<script>alert('you can view after some time your receipt.');
        window.location.href='donation.php';
        </script>";
        
    }
    else
    {
       
        echo mysqli_error($con);
    }
    mysqli_close($con);
}
?>