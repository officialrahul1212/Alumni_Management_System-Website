<?php
include 'include/config.php';
include 'include/header.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alumni Management System</title>
    <script src="https://kit.fontawesome.com/25dbf70b70.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        /* Full-width carousel */
        .carousel-item img {
            width: 100%;
            height: 50vh;
            object-fit: cover;
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 0.5rem;
            padding: 1rem;
        }

        .carousel-caption h1 {
            font-size: 3rem;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        /* About Section Styling */
        .about-section {
            background-color: #f0f0f0;
            padding: 4rem 2rem;
            border-radius: 1rem;
        }

        .about-section h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .about-section p {
            font-size: 1.125rem;
            line-height: 1.8;
            color: #333;
        }

        /* Footer Styling */
        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 1.5rem;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        /* Utility classes */
        .mb-4 {
            margin-bottom: 1.5rem;
        }
    </style>
</head>

<body>

    <!-- Wallpaper -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <?php
                $qry = "SELECT * FROM system_settings";
                $result = mysqli_query($con, $qry);
                $row = mysqli_fetch_assoc($result);
                ?>
                <img src="admin/img/<?php echo $row['image']; ?>" class="d-block w-100" alt="...">  
                <div class="carousel-caption d-none d-md-block">
                    <h1>Welcome To <?php echo $row['name']; ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Wallpaper -->

    <!-- About Us Section -->
    <div class="container my-5">
        <div class="about-section">
            <div class="text-center mb-4">
                <h1>About Us</h1>
            </div>
            <?php
            $qry = "SELECT * FROM system_settings";
            $result = mysqli_query($con, $qry);
            $row = mysqli_fetch_assoc($result);
            ?>
            <p><?php echo $row['about']; ?></p>
        </div>
    </div>
    <!-- End About Us Section -->

    <!-- Footer -->
    <?php include 'include/footer.php'; ?>
    <!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
