<?php

include '../include/config.php';
  if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $description = $_POST['description'];
    $current_image = $_POST['current_image'];

    if (!empty($_FILES['image']['name'])) {
      $image = $_FILES['image']['name'];
      $image_tmp = $_FILES['image']['tmp_name'];
      move_uploaded_file($image_tmp, "img/$image");
    } else {
      $image = $current_image;
    }

    $qry = "UPDATE gallery SET description='$description', image='$image' WHERE id='$id'";
    $result = mysqli_query($con, $qry);

    if ($result) {
      echo "<script>alert('Post Update Successfully');
        window.location.href='gallery.php';
        </script>";
    } else {
      echo "<script>alert('Post Not Update ');
        window.location.href='gallery.php';
        </script>";
    }
    mysqli_close($con);
  }
  ?>
