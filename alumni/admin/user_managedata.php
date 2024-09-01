<?php
include '../include/config.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];

    // Get the current data for this user
    $qry = "SELECT * FROM user WHERE id='$id'";
    $result = mysqli_query($con, $qry);
    $current_data = mysqli_fetch_assoc($result);

    // Check if new data is provided, otherwise use current data
    $fullname = !empty($_POST['fullname']) ? $_POST['fullname'] : $current_data['firstname'] . ' ' . $current_data['middlename'] . ' ' . $current_data['lastname'];
    $email = !empty($_POST['email']) ? $_POST['email'] : $current_data['email'];
    $password = !empty($_POST['password']) ? md5($_POST['password']) : $current_data['password']; // Only hash if new password is provided

    // Split the fullname into parts
    $name_parts = explode(" ", $fullname);
    $firstname = $name_parts[0];
    $middlename = isset($name_parts[1]) ? $name_parts[1] : "";
    $lastname = isset($name_parts[2]) ? $name_parts[2] : "";

    // Update the database
    $qry = "UPDATE user SET firstname='$firstname', middlename='$middlename', lastname='$lastname', email='$email', password='$password' WHERE id='$id'";

    if (mysqli_query($con, $qry)) {
        echo "<script>
            alert('User\'s Data Updated Successfully.');
            window.location.href='users.php';
        </script>";
    } else {
        echo "<script>
            alert('User\'s Data Not Updated.');
            window.location.href='users.php';
        </script>";
    }
}
?>
