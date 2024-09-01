<?php
session_start();
include 'include/config.php';
include 'include/header_new.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form Example</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .fixed-square {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <div class="container mt-5 p-5 ">
    <div class="d-sm-flex align-items-center justify-content-end mb-4">
      <a href="receipt1.php"><button class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
      class="fa fa-plus"></i> Donation Receipts</button></a>
    </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <h2>Donate to Our Institute</h2>
                        <p>Please follow the instructions below to make a donation.</p>
                    </div>
                    <div class="card-body">
                        <form action="donation_data.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group text-center">
                                <label for="paymentInfo" class="form-label">Payment QR Code</label><br>
                                <a target="_blank" href="img/qr.jpg">
                                    <img src="img/qq.jpg" class="img-fluid fixed-square" alt="Image">
                                </a>
                            </div>
                            <div class="form-group">
                                <label for="transaction_id" class="form-label">Transaction ID</label>
                                <input type="text" class="form-control" id="transaction_id" name="transaction_id"
                                    placeholder="Enter your transaction ID">
                            </div>
                            <div class="form-group">
                                <label for="amount" class="form-label">Amount</label>
                                <input type="text" class="form-control" id="amount" name="amount"
                                    placeholder="Enter your donation amount">
                            </div>

                            <input type="hidden" name="donateby" value="<?php echo $_SESSION['user_email']; ?>" />
                            <input type="hidden" name="contact" value="<?php echo $_SESSION['user_contact']; ?>" />
                            <input type="hidden" name="name"
                                value="<?php echo $_SESSION['user_firstname'] . " " . $_SESSION['user_middlename'] . " " . $_SESSION['user_lastname']; ?>" />

                            <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>