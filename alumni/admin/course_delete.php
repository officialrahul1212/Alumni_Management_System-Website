<?php

include '../include/config.php';

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $qry = "DELETE from course where id='$id'";
        $result = mysqli_query($con, $qry);

        if ($result) {
            echo "<script>alert('Course Delete Successfully..');
            window.location.href='course.php';
            </script>";
        } else {
            echo "<script>alert('Course Not Deleted..');
            window.location.href='course.php';
            </script>";
        }
    }
    ?>