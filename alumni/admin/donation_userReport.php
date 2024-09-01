<?php
session_start();
include '../include/config.php';

// Initialize variables
$transactions = [];
$totalAmount = 0;

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $searchTerm = $_POST['searchTerm'];

    // Prepare the SQL query to fetch transactions by donor name or transaction ID
    $qry = "SELECT * FROM donations WHERE name = ? OR transaction_id = ?";
    $stmt = $con->prepare($qry);
    $stmt->bind_param("ss", $searchTerm, $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $transactions[] = $row;
            $totalAmount += $row['amount']; // Calculate total amount
        }
    } else {
        $error = "No transactions found for the given name or transaction ID.";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
        .card-shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body style="color:black">
    <div class="container-fluid mt-5">
        
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Transaction Search</h1>
            <a href="donations.php" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-circle-left"></i>  Back </a>
            <!-- <a hred="donations.php"><button class="btn btn-secondary float-right btn-sm" id="new_user"><i class="fa fa-arrow-circle-left"></i>  Back</button></a> -->
        </div>
        <form method="POST" action="" class="mb-4">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="searchTerm" class="form-label">Donor Name or Transaction ID</label>
                    <input type="text" class="form-control" id="searchTerm" name="searchTerm" required>
                </div>
                <div class="col-md-6 d-flex align-items-end mb-3">
                    <button type="submit" class="btn btn-primary w-100">Search</button>
                </div>
            </div>
        </form>

        <?php if (isset($transactions) && !empty($transactions)): ?>
            <div class="row mt-5">
                <h3>Transaction Information</h3>
                <div class="card card-shadow col-lg-12">
                    <div class="card-body">
                        <table class="table table-bordered border-dark table-striped table-hover" id="dataTable" style="color:black">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Donor Name</th>
                                    <th>Amount</th>
                                    <th>Transaction ID</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($transactions as $index => $transaction): ?>
                                    <tr>
                                        <td><?php echo $index + 1; ?></td>
                                        <td><?php echo $transaction['name']; ?></td>
                                        <td><?php echo $transaction['amount']." ₹"; ?></td>
                                        <td><?php echo $transaction['transaction_id']; ?></td>
                                        <td><?php echo $transaction['receipt_date']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Display the total amount -->
                <div class="card card-shadow col-lg-12 mt-3 mb-5">
                    <div class="card-body">
                        <h5 class="text-end">Total Amount: <?php echo $totalAmount; ?> ₹</h5>
                    </div>
                </div>
            </div>
        <?php elseif (isset($error)): ?>
            <div class="alert alert-danger mt-3">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

     
        
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
