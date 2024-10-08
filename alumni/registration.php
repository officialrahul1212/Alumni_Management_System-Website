<?php
include 'include/header.php';
include 'include/config.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alumni management system</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    .gallery {
      margin: 5px;
      border: 1px solid #ccc;
      float: left;
      width: 180px;
      padding: 10px;
    }

    div.gallery:hover {
      border: 1px solid #777;
    }

    div.gallery img { 
      width: 100%;
      height: auto;
    }

    .card-shadow {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body >
  <!-- card -->
  <div class="container d-flex justify-content-center pt-5">
    <div class="card card-shadow w-75 m-4 "> 
      <div class="card-header bg-primary text-light p-3">
        <h5>Registration / Create Account</h5>
      </div>
      <div class="card-body">
        <form class="row g-3" action="registration_data.php" method="POST" enctype="multipart/form-data">
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">First name</label>
            <input type="text" class="form-control" id="validationCustom01" name="firstname" required>
          </div>

          <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Middle name</label>
            <div class="input-group has-validation">
              <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend"
                name="middlename" required>
            </div>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="validationCustom02" name="lastname" required>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Gender</label>
            <select class="form-select" name="gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>

            </select>
          </div>

          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Batch </label>
            <select class="form-select" name="batch" required>
              <option></option>
              <?php
              $qrye = "SELECT * from batch";
              //echo $qry; exit;
              $resul = mysqli_query($con, $qrye);

              while ($row = mysqli_fetch_assoc($resul)) {
                ?>
                <option><?php echo $row['batch']; ?></option>
              <?php } ?>

            </select>
          </div>

          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Select course</label>
            <select class="form-select" name="course" required>
              <option></option>
              <?php
              $qry = "select * from course";
              //echo $qry; exit;
              $result = mysqli_query($con, $qry);

              while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <option><?php echo $row['course']; ?></option>
              <?php }
              mysqli_close($con); ?>

            </select>
          </div>


          <div class="col-md-8">
            <label for="inputEmail4" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputEmail4" name="address" required/>
          </div>

          <div class="col-md-4">
            <label for="inputEmail4" class="form-label">Currently Connected To</label>
            <input type="text" class="form-control" id="inputEmail4" name="connected_to">
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Profile Image</label>
            <input type="file" class="form-control" id="inputEmail4" name="image" required>
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Contact No.</label>
            <input type="text" class="form-control" id="inputEmail4" name="contact" required />
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email" required />
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="password" required />
          </div>


          <div class="col-md-6">
          <div class="gallery">
            <label for="inputEmail4" class="form-label">Payment</label>
            <a target="_blank" href="img/qr.jpg">
              <img src="img/qq.jpg" alt="Cinque Terre" width="600" height="400">
            </a>
          </div>
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Payment Recipt</label>
            <input type="file" class="form-control" id="inputEmail4" name="receipt" required>
          </div>

          <div class="modal-footer justify-content-center">
            <button type="submit" class="btn btn-primary " name="submit">Create Account</button>
          </div>

        </form>
      </div>
    </div>
  </div>

  <!--End  card -->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>