<?php

include '../include/config.php';

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $qry = "DELETE from event where id='$id'";
        $result = mysqli_query($con, $qry);

        if ($result) {
           
            echo "<script>alert('Event Delete Successfully..');
            window.location.href='events.php';
            </script>";
        } else {
            echo "<script>alert('Event Not Delete.. ');
            window.location.href='events.php';
            </script>";
        }
    }
    ?>