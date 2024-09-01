<?php
include 'include/config.php';
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $enc_password = md5($password);

    $qry = "SELECT * FROM user WHERE email='$email' AND password='$enc_password'";
    $result = mysqli_query($con, $qry);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);

        if ($row['role'] == "admin") {
            // Admin login
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['admin_email'] = $row['email'];
            $_SESSION['admin_firstname'] = $row['firstname'];
            $_SESSION['admin_middlename'] = $row['middlename'];
            $_SESSION['admin_lastname'] = $row['lastname'];

            header("Location: admin/index.php");
        } else if ($row['role'] == "user") {
           
            if ($row['status'] == 'pending') {
                echo "<script>alert('Your account is pending approval. You cannot log in at this time.');
                window.location.href='index.php';</script>";
            } else {
                
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_email'] = $row['email'];
                $_SESSION['user_firstname'] = $row['firstname'];
                $_SESSION['user_middlename'] = $row['middlename'];
                $_SESSION['user_lastname'] = $row['lastname'];
                $_SESSION['user_contact'] = $row['contact'];
                $_SESSION['user_course'] = $row['course'];
                $_SESSION['user_batch'] = $row['batch'];
                $_SESSION['user_connected_to'] = $row['connected_to'];
                $_SESSION['user_image'] = $row['image'];
                $_SESSION['user_address'] = $row['address'];

                header("Location: home.php");
            }
        }
    } else {
       
        echo "<script>alert('Invalid login credentials.');
                window.location.href='index.php';</script>";
    }
}
?>
