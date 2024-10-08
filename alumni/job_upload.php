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
  <title>Alumni management system</title>
  <script src="https://kit.fontawesome.com/25dbf70b70.js" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    .desc {
      /* padding-left: 50px;
      padding-right: 20px; */
      overflow: hidden;
      /* text-overflow: ellipsis;
      white-space: nowrap; */
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
      margin: 50px 0;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2), 0 6px 6px rgba(0, 0, 0, 0.3);
    }

    .card-body-custom {
      padding: 10px;
    }
  </style>
</head>

<body class="p-5 mt-5">

  <h2 class="text-center">YOUR UPLOADED JOBS</h2>
  <!--job card -->
  <?php
  $email = $_SESSION['user_email'];
  $qry = "SELECT * FROM job where postedby='$email'";
  $result = (mysqli_query($con, $qry));

  while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="container ">
      <div class="card w-125 m-4  card-custom">
        <div class="card-body m-3">
          <div class="job">

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
            <div class="col-md d-flex justify-content-center">
              <h3><?php echo $row['title']; ?></h3>
            </div>

            <div class="col-md d-flex justify-content-center">
              <h6><i class="fa fa-building" aria-hidden="true"></i>&nbsp;&nbsp; Company : <?php echo $row['company']; ?>
              </h6>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <h6><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp; Location :
                <?php echo $row['location']; ?></i>
              </h6>
            </div>
            <hr>
            <div class="py-3">
              <h6>Description</h6>
              <p class="desc"><?php echo $row['description']; ?></p>
            </div>

            <div>
              <hr class="new">
            </div>
            <div class="footer">
              <div class="modal-footer ">
                <div class=" col-md">
                  <h5> <span class="badge text-bg-info"><i>Posted by: <?php echo $row['postedby']; ?></i></span></h5>
                </div>
                <form action="job_delete.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                  <input type="submit" name="delete" class="btn btn-danger" value="Remove" />

                </form>
                <form action="job_view.php" method="POST" class="p-1">
                  <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                  <input type="submit" name="view" class="btn btn-primary " value="Read more.." />

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>

  <p class="text-center p-5">No data found</p>
  <!--End job card -->










  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>