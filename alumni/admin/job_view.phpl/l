<?php
session_start();
// include 'session.php';
// include 'sidebar.php';
include 'include/config.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style>
    .card-shadow {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
    }
    .card-body {
      padding: 1.5rem;
    }
    .description {
      font-size: 1rem;
      color: #333;
      margin: 0;
    }
  </style>
</head>

<body>

  <!-- card -->
  <div class="container d-flex justify-content-center">
    <div class="card card-shadow w-75 m-4">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white" id="staticBackdropLabel">Career Opportunity</h5>
        <a href="javascript:history.back()"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
      </div>
      <div class="card-body">
        <form class="row g-3" action="" method="POST">
          <?php
          if (isset($_POST['view'])) {
            $id = $_POST['id'];

            $qry = "SELECT * FROM job WHERE id='$id'";
            $result = mysqli_query($con, $qry);

            $row = mysqli_fetch_assoc($result);

            ?> 

            <div>
              <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>" />
              <h6>Job Title: <?php echo htmlspecialchars($row['title']); ?></h6>
              <h6><i class="fa fa-building" aria-hidden="true"></i> Company: <?php echo htmlspecialchars($row['company']); ?></h6>
              <h6><i class="fa fa-map-marker" aria-hidden="true"></i> Location: <?php echo htmlspecialchars($row['location']); ?></h6>
              <hr>
              <h6>Description</h6>
              <p class="description"><?php echo nl2br(htmlspecialchars($row['description'])); ?></p>
            </div>
            <div class="card-header d-flex justify-content-end">
              <a href="javascript:history.back()" class="btn btn-secondary">Back</a>
            </div>
            <?php mysqli_close($con);
          }
          ?>

        </form>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
</body>

</html>
