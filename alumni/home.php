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

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .hero-section {
            background: url('img/wall.png') center/cover no-repeat;
            height: 95vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
            text-align: center;
        }

        .hero-section h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .hero-section .btn-primary {
            padding: 10px 30px;
            font-size: 1rem;
            border-radius: 25px;
        }

        .info-section,
        .mission-section {
            padding: 50px 0;
            background-color: #ffffff;
        }

        .info-title,
        .mission-title {
            font-size: 2.5rem;
            margin-bottom: 40px;
            text-align: center;
            font-weight: bold;
            color: #343a40;
        }

        .info-content,
        .mission-content {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #495057;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .footer p {
            margin: 0;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
      background-color: rgba(255, 255, 255, 0.9);
      color: black;
    }
    </style>
</head>

<body>
    <?php
    // Fetch data from the database
    $qry = "SELECT * FROM system_settings";
    $result = mysqli_query($con, $qry);
    $row = mysqli_fetch_assoc($result);

    $about = $row['about'];
    $image = $row['image']; // Fetch the image path or file name
    ?>

    <!-- Hero Section -->
    <section class="hero-section" style="background-image: url('admin/img/<?php echo ($image); ?>');">
        <div>
            <h1>Welcome to <?php echo ($row['name']); ?></h1>
            <p>Your gateway to a successful future</p>
            <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary">Login Now</a> -->
        </div>
    </section>

    <div class="container my-5">
    <div class="row">
      <!-- Events Section -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Upcoming Events</h5>
            <p class="card-text">Join our upcoming events and reconnect with fellow alumni.</p>
            <a href="events.php" class="btn btn-primary">View Events</a>
          </div>
        </div>
      </div>
      <!-- News Section -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Job News</h5>
            <p class="card-text">Stay updated with the latest Jobs from our alumni network.</p>
            <a href="job.php" class="btn btn-primary">Read News</a>
          </div>
        </div>
      </div>
      <!-- Recent Activities Section -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Alumni Network</h5>
            <p class="card-text">view alumni </p><br>
            <a href="alumni_list.php" class="btn btn-primary">View Activities</a>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- College Information Section -->
    <section class="info-section">
        <div class="container">
            <div class="info-title">About Our College</div>
            <div class="info-content">
                <?php
                // Display about text with proper formatting
                echo $about; // Already formatted with <p> and <br> tags
                ?>
            </div>
        </div>
    </section>

    <!-- Mission & Values Section -->
    <section class="mission-section">
        <div class="container">
            <div class="mission-title">Our Mission & Values</div>
            <div class="mission-content">
                <p>
                    At College Name, our mission is to empower students to reach their full potential through a holistic
                    education that emphasizes both academic achievement and personal growth. We are dedicated to
                    fostering a diverse and inclusive community where every student feels valued and supported.
                </p>
                <p>
                    Our core values—integrity, excellence, innovation, and collaboration—guide everything we do. We
                    strive to create an environment where students can develop the skills, knowledge, and character
                    needed to succeed in their chosen fields and contribute meaningfully to society.
                </p>
            </div>
        </div>
    </section>

    <?php include 'include/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
