<?php

include '../include/config.php';

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $qry = "DELETE from gallery where id='$id'";
        $result = mysqli_query($con, $qry);

        if ($result) {
            echo "<script>alert('Post Delete Successfully..');
            window.location.href='gallery.php';
            </script>";
        } else {
            echo "<script>alert('Post Not Delete.. ');
            window.location.href='gallery.php';
            </script>";
        }
    }
    ?>