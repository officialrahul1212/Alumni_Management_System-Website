
<?php
session_start();
include 'sidebar.php';
?>
<!doctype html>
<html lang="en">

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
<div class="container card">
<form class="row g-3" action="alumni_manage.php" method="POST">
<?php
                    if (isset($_POST['view'])) {
                    $id = $_POST['id'];
                    
                    $qry = "SELECT * FROM user where id='$id'";
                    $result = mysqli_query($con, $qry);
                    
                    $row = mysqli_fetch_assoc($result);
                    
                    ?>
                  <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
    <div class="profile-header">
        <img src="../img/<?php echo $row['image']; ?>" alt="Profile Image" alt="Primary Image" onerror="this.onerror=null; this.src='img/profile.png';" class="profile-img">
        <h1 class="display-4"><?php echo $row['firstname'].' '.$row['middlename'].' '.$row['lastname']; ?></h1>
        <p class="lead">.</p>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="profile-card">
                <div class="profile-info">
                    <h2>Profile Information</h2>
                    <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
                    <p><strong>Phone:</strong> +91 <?php echo $row['contact']; ?></p>
                    <p><strong>Address:</strong> <?php echo $row['address']; ?></p>
                    <p><strong>Course:</strong> <?php echo $row['course']; ?></p>
                    <p><strong>Batch:</strong> <?php echo $row['batch']; ?></p>
                    <p><strong>Currently Working At:</strong> <?php echo $row['connected_to']; ?></p>
                    <p><strong>Account Status:</strong> <?php echo $row['status']; ?></p>
                    <p><strong>Receipt:</strong> <a target="_blank" href="../receipt/<?php echo $row['receipt']; ?>"> <img src="../receipt/<?php echo $row['receipt']; ?>" class="img-fluid " alt="..." style="max-width: 10%; height: 30%;"></a></p>
                </div>
                <div class="btn-container d-flex justify-content-center p-3">
                <?php
                        if($row['status']=='pending')
                        { ?>
                        <input type="hidden" value="verified" name="status">
                            <input type="submit" class="btn btn-primary " name="update" value="verified">

                            <?php }
                        else{ ?>
                            <input type="hidden" value="pending" name="status">
                            <input type="submit" class="btn btn-danger " name="update" value="pending">
                      <?php  }
                        ?>
                    <div class="p-1"><a href="alumni_list.php" class="btn btn-secondary" >Back</a></div>
                </div>
            </div>
        </div>
    </div>
    </form>
                <?php mysqli_close($con);
                        }
                        ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
