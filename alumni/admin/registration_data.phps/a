<?php
include 'include/config.php';

if(isset($_POST['submit']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $gender = $_POST['gender'];
    $batch = $_POST['batch'];
    $course = $_POST['course'];
    $connected_to = $_POST['connected_to'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $enc_password = md5($password);

    // Handle profile image upload
    $image_filename = $_FILES['image']['name'];
    $image_tempname = $_FILES['image']['tmp_name'];
    $image_folder = "./img/" . $image_filename;

    // Handle receipt upload
    $receipt_filename = $_FILES['receipt']['name'];
    $receipt_tempname = $_FILES['receipt']['tmp_name'];
    $receipt_folder = "./receipt/" . $receipt_filename;

    $role = "user";
    $status = "pending";

    $qry = "INSERT INTO user (firstname, lastname, middlename, gender, batch, course, address, connected_to, image, email, password, contact, receipt, role, status) 
            VALUES ('$firstname', '$lastname', '$middlename', '$gender', '$batch', '$course', '$address', '$connected_to', '$image_filename', '$email', '$enc_password', '$contact', '$receipt_filename', '$role', '$status')";

    if (mysqli_query($con, $qry) && move_uploaded_file($image_tempname, $image_folder) && move_uploaded_file($receipt_tempname, $receipt_folder)) {
        echo "<script>alert('Record inserted successfully');
        window.location.href='logout.php';
        </script>";
    } else {
        echo mysqli_error($con);
    }

    mysqli_close($con);
}
?>
