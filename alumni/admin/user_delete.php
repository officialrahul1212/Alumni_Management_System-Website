<?php

include '../include/config.php';

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $qry = "DELETE from user where id='$id'";
        $result = mysqli_query($con, $qry);

        if ($result) {
           echo "<script>alert('User Data Delete Successfully..');
            window.location.href='users.php';
            </script>";
        } else {
            echo "<script>alert('User Data Not Delete.. ');
            window.location.href='users.php';
            </script>";
        }
    }
    ?> 