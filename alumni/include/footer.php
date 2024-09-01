<?php
include 'config.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alumni Management System</title>
    <script src="https://kit.fontawesome.com/25dbf70b70.js" crossorigin="anonymous"></script>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .footer-container {
            padding: 10px 0; /* Reduced padding */
           
        }
        .footer h1 {
            font-size: 1.5rem; /* Reduced font size */
        }
        .footer p {
            font-size: 0.9rem; /* Reduced font size */
            margin-bottom: 10px; /* Reduced margin */
        }
        .footer .fa-2x {
            font-size: 1.5rem; /* Reduced icon size */
        }
        .footer .fa-lg {
            font-size: 1.2rem; /* Reduced social icon size */
        }
        .footer .row {
            margin-bottom: 15px; /* Reduced bottom margin for rows */
        }
    </style>
</head>

<body>

    <footer class="footer bg-dark text-center text-lg-start text-white">
        <div class="container footer-container">
            <h1>Contact Us</h1>

            <?php
            $qry = "SELECT * FROM system_settings";
            $result = mysqli_query($con, $qry);
            $row = mysqli_fetch_assoc($result);
            ?>

            <div class="row justify-content-center my-3">
                <div class="col-md-4 text-center mb-2">
                    <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                    <p><b><?php echo $row['contact']; ?></b></p>
                </div>
                <div class="col-md-4 text-center mb-2">
                    <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                    <p><b><?php echo $row['email']; ?></b></p>
                </div>
            </div>

            <div class="row justify-content-center my-3">
                <div class="col-md-8 text-center">
                    <p><b>Address</b> : Description and example for each icon, including fa fa-twitter and fa fa-twitter-square.</p>
                </div>
            </div>

            <div class="row justify-content-center my-3">
                <div class="col-md-4 text-center">
                    <a href="#" class="text-white mx-2"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="#" class="text-white mx-2"><i class="fab fa-youtube fa-lg"></i></a>
                    <a href="#" class="text-white mx-2"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-white mx-2"><i class="fab fa-twitter fa-lg"></i></a>
                </div>
            </div>
        </div>

        <!-- <div class="text-center text-white p-2" style="background-color: rgba(0, 0, 0, 0.2);">
            WWW.demo.com
            <a class="text-white" href="#">demo.com</a>
        </div> -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
