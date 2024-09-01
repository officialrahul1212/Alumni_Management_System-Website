<?php session_start();
include '../include/config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
        .card-shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
        }
        .btn-show-users {
            width: 150px; /* Fixed width for the button */
            font-size: 16px; /* Adjust font size if needed */
        }
    </style>
</head>
<body style="color:black;">
    <div class="container-fluid mt-5 mb-5">
        
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Select Course</h1>
            <a href="course.php" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-circle-left"></i>  Back </a>
        </div>
        
        <!-- Course Selection Form -->
        <form method="POST" action="" class="mb-4">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="searchTerm" class="form-label">Choose a course:</label>
                    <select name="course" id="course" class="form-select form-control">
                    <option value="">Select Course</option>
                    <?php
                      $qry = "SELECT * FROM course";
                      $result = mysqli_query($con, $qry);

                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['course'] . "'>" . $row['course'] . "</option>";
                      }
                    ?>
                </select>
                </div>
                <div class="col-md-6 d-flex align-items-end mb-3">
                    <button type="submit" name="submit" class="btn btn-primary w-100">Search</button>
                </div>
            </div>
        </form>







        <?php
        if (isset($_POST['submit']) && !empty($_POST['course'])) {
            $course = mysqli_real_escape_string($con, $_POST['course']); // Sanitize input

            // Fetch all user details enrolled in the selected course
            $sql = "SELECT * FROM user WHERE course = '$course' AND status='verified'";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo "<h2 class='mt-5 text-gray-800'>User Details for <span class='badge bg-info'>$course</span>:</h2>";
                echo "<div class='card card-shadow mt-3'>
                        <div class='card-body'>
                            <table class='table table-bordered border-dark table-striped table-hover 'id='dataTable'>
                                <thead class='table-dark'>
                                    <tr>
                                     <th>Name</th>
                                        <th>Email</th>
                                        <th>Batch</th>
                                        <th>Gender</th>
                                        <th>Connected To</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                        <th>Registration Date</th>
                                    </tr>
                                </thead>
                                <tbody>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                     <td>" . $row['firstname'] ." ".$row['middlename'] ." ".$row['lastname'] . "</td>
                            <td>" . $row['email'] . "</td>
                            <td>" . $row['batch'] . "</td>
                            <td>" . $row['gender'] . "</td>
                            <td>" . $row['connected_to'] . "</td>
                            <td>" . $row['contact'] . "</td>
                            <td>" . $row['address'] . "</td>
                            <td>" . $row['reg_date'] . "</td>
                          </tr>";
                }
                echo "  </tbody>
                      </table>
                    </div>
                  </div>";
            } else {
                echo "<div class='alert alert-danger mt-3'>
                        No users enrolled in this course.
                      </div>";
            }
        }
        ?>
        
    </div>

   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
