<?php
session_start();
include 'include/config.php';
include 'include/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - College</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .about-section {
      padding: 50px 0;
      background-color: #f8f9fa;
    }
  </style>
</head>
<body>
  <header class="bg-primary text-white text-center py-5">
    <div class="container">
      <h1 class="display-4">About Us</h1>
      <p class="lead">Learn more about our college, our mission, and our history.</p>
    </div>
  </header>

  <section class="about-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Our Mission</h2>
          
            <?php
            $qry = "SELECT * FROM system_settings";
            $result = mysqli_query($con, $qry);
            $row = mysqli_fetch_assoc($result);
            ?>
          <p><?php echo $row['about']; ?></p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-12">
          <h2>Our History</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Praesent ut ligula non mi varius sagittis. Pellentesque commodo eros a enim. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris.</p>
        </div>
      </div>
    </div>
  </section>

  <?php include 'include/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
