<?php

include '../include/config.php';

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $qry = "DELETE from job where id='$id'";
        $result = mysqli_query($con, $qry);

        if ($result) {
            
            echo "<script>alert('Job Delete Successfully..');
            window.location.href='job_list.php';
            </script>";
        } else {
            echo "<script>alert('Job Not Delete.. ');
            window.location.href='job_list.php';
            </script>";
        }
    }
    ?>