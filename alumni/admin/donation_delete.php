<?php

include '../include/config.php';

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $qry = "DELETE from donations where id='$id'";
        $result = mysqli_query($con, $qry);

        if ($result) {
            
            echo "<script>alert('Donation Data Delete Successfully..');
            window.location.href='donations.php';
            </script>";
        } else {
            echo "<script>alert('Donation Data Not Delete.. ');
            window.location.href='donations.php';
            </script>";
        }
    }
    ?>
