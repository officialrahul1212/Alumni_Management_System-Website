<!doctype html>
<html lang="en">
<?php
session_start();
include 'include/config.php';
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .profile-header {
            background-color: #e9edf0;
            padding: 30px 0;
            text-align: center;
            border-bottom: 1px solid #dee2e6;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #bcc8d1;
            margin-bottom: 15px;
        }
        .profile-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            margin-top: -75px;
            padding: 20px;
            background: #fff;
        }
        .profile-info {
            padding: 20px;
        }
        .profile-info h2 {
            margin-top: 0;
        }
        .btn-container {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="profile-header">
    <a target="_blank" href="img/<?php echo $_SESSION['user_image']; ?>"><img src="img/<?php echo $_SESSION['user_image']; ?>" alt="Primary Image" onerror="this.onerror=null; this.src='admin/img/profile.png';" class="profile-img"></a>
        <h1 class="display-4"><?php echo $_SESSION['user_firstname'].' '.$_SESSION['user_middlename'].' '.$_SESSION['user_lastname']; ?></h1>
        <p class="lead">.</p>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2"> 
            <div class="profile-card">
                <div class="profile-info">
                    <h2>Profile Information</h2>
                    <p><strong>Email:</strong> <?php echo $_SESSION['user_email']; ?></p>
                    <p><strong>Phone:</strong> +91 <?php echo $_SESSION['user_contact']; ?></p>
                    <p><strong>Address:</strong> <?php echo $_SESSION['user_address']; ?></p>
                    <p><strong>Course:</strong> <?php echo $_SESSION['user_course']; ?></p>
                    <p><strong>Batch:</strong> <?php echo $_SESSION['user_batch']; ?></p>
                    <p><strong>Currently Working At:</strong> <?php echo $_SESSION['user_connected_to']; ?></p>
                </div>
                <div class="btn-container d-flex justify-content-center p-3">
                    <form action="profile_manage.php" method="POST" class="p-1">
                        <input type="submit" name="edit" class="btn btn-primary " value="Edit Profile" />
                    </form>
                    <div class="p-1"><a href="home.php" class="btn btn-secondary" >Back</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
