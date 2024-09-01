<?php
session_start();
include 'include/config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['update'])) {
    $id = $_SESSION['user_id'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $connected_to = $_POST['connected_to'];
    $address = $_POST['address'];

    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = "./img/" . $filename;

    if (move_uploaded_file($tempname, $folder)) {
        $qry = "UPDATE user SET 
                firstname='$firstname', 
                middlename='$middlename', 
                lastname='$lastname', 
                email='$email', 
                contact='$contact', 
                course='$course', 
                batch='$batch', 
                connected_to='$connected_to', 
                address='$address',
                image='$filename' 
                WHERE id='$id'";
    } else {
        $qry = "UPDATE user SET 
                firstname='$firstname', 
                middlename='$middlename', 
                lastname='$lastname', 
                email='$email', 
                contact='$contact', 
                course='$course', 
                batch='$batch', 
                connected_to='$connected_to', 
                address='$address'
                WHERE id='$id'";
    }

    if (mysqli_query($con, $qry)) {
        $_SESSION['user_firstname'] = $firstname;
        $_SESSION['user_middlename'] = $middlename;
        $_SESSION['user_lastname'] = $lastname;
        $_SESSION['user_email'] = $email;
        $_SESSION['user_contact'] = $contact;
        $_SESSION['user_course'] = $course;
        $_SESSION['user_batch'] = $batch;
        $_SESSION['user_connected_to'] = $connected_to;
        $_SESSION['user_address'] = $address;
        if ($filename) {
            $_SESSION['user_image'] = $filename;
        }
        echo "<script>alert('Profile updated successfully.'); window.location.href='profile.php';</script>";
    } else {
        echo "<script>alert('Failed to update profile.'); window.location.href='profile_manage.php';</script>";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
     .card-shadow {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
    }
</style>        
</head>
<body>
<div class="container d-flex justify-content-center">
    <div class="card card-shadow w-50 m-4">
        <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="staticBackdropLabel">Update Profile</h5>
            <a href="profile.php"><button type="button" class="btn-close" aria-label="Close"></button></a>
        </div>
        <div class="card-body">
            <form class="row g-3" action="#" method="POST" enctype="multipart/form-data">
                <!-- Form fields for user information -->
                <div class="col-md-12">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="firstname" value="<?php echo $_SESSION['user_firstname']; ?>"/>
                </div>
                <div class="col-md-12">
                    <label for="middlename" class="form-label">Middlename</label>
                    <input type="text" class="form-control" name="middlename" value="<?php echo $_SESSION['user_middlename']; ?>"/>
                </div>
                <div class="col-md-12">
                    <label for="lastname" class="form-label">Lastname</label>
                    <input type="text" class="form-control" name="lastname" value="<?php echo $_SESSION['user_lastname']; ?>"/>
                </div>
                <div class="col-md-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['user_email']; ?>"/>
                </div>
                <div class="col-md-12">
                    <label for="contact" class="form-label">Contact</label>
                    <input type="text" class="form-control" name="contact" value="<?php echo $_SESSION['user_contact']; ?>"/>
                </div>
                <div class="col-md-12">
                    <label for="course" class="form-label">Course</label>
                    <!-- <input type="text" class="form-control" name="course" value="<?php echo $_SESSION['user_course']; ?>"/> -->
                    <select class="form-select" name="course" required>
              <option><?php echo $_SESSION['user_course']; ?></option>
              <?php
              $qry = "select * from course";
              //echo $qry; exit;
              $result = mysqli_query($con, $qry);

              while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <option><?php echo $row['course']; ?></option>
              <?php }
               ?>

            </select>
                </div>
                <div class="col-md-12">
                    <label for="batch" class="form-label">Batch</label>
                    <!-- <input type="text" class="form-control" name="batch" value="<?php echo $_SESSION['user_batch']; ?>"/> -->
                    <select class="form-select" name="batch" required>
              <option><?php echo $_SESSION['user_batch']; ?></option>
              <?php
              $qrye = "SELECT * from batch";
              //echo $qry; exit;
              $resul = mysqli_query($con, $qrye);

              while ($row = mysqli_fetch_assoc($resul)) {
                ?>
                <option><?php echo $row['batch']; ?></option>
              <?php } 
              mysqli_close($con); ?>

            </select>
                </div>
                <div class="col-md-12">
                    <label for="connected_to" class="form-label">Connected To</label>
                    <input type="text" class="form-control" name="connected_to" value="<?php echo $_SESSION['user_connected_to']; ?>"/>
                </div>
                <div class="col-md-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $_SESSION['user_address']; ?>"/>
                </div>
                <div class="col-md-6">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" name="image">
                    <div class="p-3">
                        <img src="img/<?php echo $_SESSION['user_image']; ?>" class="img-fluid" alt="Profile Image" style="max-width: 30%; height: 50%;">
                    </div>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                    <a href="profile.php" class="btn btn-dark">Close</a>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
