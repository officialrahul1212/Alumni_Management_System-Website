<?php
session_start();
include '../include/config.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $searchQuery = $_POST['searchQuery'];

    // Prepare the SQL query to search by email
    $qry = "SELECT * FROM user WHERE email = ?";
    $stmt = $con->prepare($qry);
    $stmt->bind_param("s", $searchQuery);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch the user's information
        $row = $result->fetch_assoc();
        $userName = $row['firstname'] . ' ' . $row['middlename'] . ' ' . $row['lastname'];
        $userEmail = $row['email'];
        $userRole = $row['role'];
        $userImage = $row['image'];
        $userContact = $row['contact'];
        $userAddress = $row['address'];
        $userCourse = $row['course'];
        $userBatch = $row['batch'];
        $userConnectedTo = $row['connected_to'];
        $userStatus = $row['status'];
        $userrole = $row['role'];
        $regdate = $row['reg_date'];
        $userReceipt = $row['receipt'];
    } else {
        $error = "No user found with the given email.";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>User Info Report</title>
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
<div class="container mt-5">
    <h1 class="h3 mb-4 text-gray-800">User Info Report</h1>
    <!-- <form method="POST" action="" class="row g-3 d-flex">
        <div class="mb-5 col-md-6">
            <label for="        " class="form-label">Enter Email</label>
            <input type="text" class="form-control" id="searchQuery" name="searchQuery" required>
        </div>
        <div class="">
        <label for="searchQuery" class="form-label"> </label>
        <button type="submit" class="btn btn-primary mt-4 ">Generate Report</button>
        </div>
    </form> -->

    <form method="POST" action="" class="mb-4">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="searchTerm" class="form-label">Enter Email</label>
                    <input type="text" class="form-control" id="searchTerm" name="searchQuery" required>
                </div>
                <div class="col-md-6 d-flex align-items-end mb-3">
                    <button type="submit" class="btn btn-primary w-100">Search</button>
                </div>
            </div>
        </form>

    <?php if (isset($userName)): ?>
        <div class="profile-header">
            <img src="../img/<?php echo $userImage; ?>" alt="Profile Image" class="profile-img">
            <h1 class="display-4"><?php echo $userName; ?></h1>
            <p class="lead">.</p>
        </div>
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <div class="profile-card">
                    <div class="profile-info">
                        <h2>Profile Information</h2>
                        <p><strong>Email:</strong> <?php echo $userEmail; ?></p>
                        <p><strong>Phone:</strong> +91 <?php echo $userContact; ?></p>
                        <p><strong>Address:</strong> <?php echo $userAddress; ?></p>
                        <p><strong>Course:</strong> <?php echo $userCourse; ?></p>
                        <p><strong>Batch:</strong> <?php echo $userBatch; ?></p>
                        <p><strong>Currently Working At:</strong> <?php echo $userConnectedTo; ?></p>
                        <p><strong>Account Status:</strong> <?php echo $userStatus; ?></p>
                        <p><strong>Role:</strong>  <mark> <?php echo $userrole; ?></mark></p>
                        <p><strong>Registration Date:</strong><?php echo $regdate; ?></p>
                        <!-- <p><strong>Receipt:</strong> <a target="_blank" href="../receipt/<?php echo $userReceipt; ?>"> <img src="../receipt/<?php echo $userReceipt; ?>" class="img-fluid" alt="..." style="max-width: 10%; height: 30%;"></a></p> -->
                    </div>
                    <div class="btn-container">
                        <a href="users.php" class="btn btn-secondary mt-3">Back</a>
                    </div>
                </div>
            </div>
        </div>
    <?php elseif (isset($error)): ?>
        <div class="alert alert-danger mt-3">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
