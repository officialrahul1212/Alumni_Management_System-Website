<?php

include '../include/config.php';

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $qry = "DELETE from user where id='$id'";
        $result = mysqli_query($con, $qry);

        
        if ($result) {
           
            echo "<script>alert('Alumni Delete Successfully..');
            window.location.href='alumni_list.php';
            </script>";
        } else {
            echo "<script>alert('Alumni Not Delete.. ');
            window.location.href='alumni_list.php';
            </script>";
        }
    }
    ?>