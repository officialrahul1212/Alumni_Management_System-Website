<?php
include '../include/config.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $about = $_POST['about'];
    $current_image = $_POST['current_image'];

    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($image_tmp, "img/$image");
    } else {
        $image = $current_image;
    }

    $qry = "UPDATE system_settings SET name='$name', email='$email', contact='$contact', about='$about', image='$image' WHERE id='$id'";

    if (mysqli_query($con, $qry)) {
       echo "<script>alert('System Setting Update Successfully..');
        window.location.href='system_setting.php';
        </script>";
    } else {
        echo "<script>alert('System Setting Not Update.. ');
        window.location.href='system_setting.php';
        </script>";
         mysqli_error($con);
    }

    mysqli_close($con);
}
?>
