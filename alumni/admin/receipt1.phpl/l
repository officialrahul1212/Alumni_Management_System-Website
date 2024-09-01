<?php
session_start();
include 'include/config.php';
include 'include/header_new.php';
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
    .desc {
      overflow: hidden;
      -webkit-line-clamp: 2;
      display: -webkit-box;
      -webkit-box-orient: vertical;
      font-size: medium;
      color: #000000cf;
      font-style: italic;
    }
    .new {
      border: 3px solid blue;
      border-radius: 5px;
    }
    .card-custom {
      padding: 10px;
      margin: 10px 0;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .card-body-custom {
      padding: 10px;
    }
  </style>
</head>

<body class="pt-5 mt-5">
  <!--job card -->
  <?php
  $email = $_SESSION['user_email'];
  $qry = "SELECT * FROM donations WHERE donateby='$email' AND status='confirm'";
  $result = (mysqli_query($con, $qry));
  while ($row = mysqli_fetch_assoc($result)) {
  ?>
    <div class="container bg-light ">
      <div class="card card-custom shadow-sm">
        <div class="card-body card-body-custom">
          <div class="job">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
            <div class="d-flex justify-content-between align-items-center">
              <p class="desc mb-0">Hi <?php echo $row['name']; ?>, your <b><?php echo $row['date']; ?></b> donation amount is received</p>
              <form action="receipt.php" method="POST" class="mb-0">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                <input type="submit" name="receipt" class="btn btn-primary" value="View Receipt.." />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  <!--End job card -->
  <p class="text-dark text-center">No data found</p>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
