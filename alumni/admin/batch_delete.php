<?php

include '../include/config.php';

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $qry = "DELETE from batch where id='$id'";
    $result = mysqli_query($con, $qry);

    if ($result) {
        echo "<script>alert('Batch Delete Successfully..');
        window.location.href='batch.php';
        </script>";
    } else {
        echo "<script>alert('Batch Not Deleted..');
        window.location.href='batch.php';
        </script>";
    
    }
}
?>