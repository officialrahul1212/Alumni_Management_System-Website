<?php

include 'include/config.php';

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $qry = "DELETE from job where id='$id'";
        $result = mysqli_query($con, $qry);

        if ($result) {
            // echo "<script>alert('data  delete')</script>";
            header("Location:job_upload.php");
        } else {
            echo "<script>alert('data not delete')</script>";
        }
    }
    ?>