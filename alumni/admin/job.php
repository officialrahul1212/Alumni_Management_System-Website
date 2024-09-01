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
      margin: 30px 0;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2), 0 6px 6px rgba(0, 0, 0, 0.3);
    }
    .card-body-custom {
      padding: 10px;
    }
    .card-shadow {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5), 0 6px 20px rgba(0, 0, 0, 0.5);
    }
  </style>
</head>

<body>

  <!--job Modal -->
  <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog card-shadow modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">New Job Hiring</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="row g-3" action="job_data.php" method="POST">
            <div class="col-md-8">
              <label for="inputEmail4" class="form-label">Company</label>
              <input type="text" class="form-control" id="inputEmail4" name="company">
            </div>
            <div class="col-md-8">
              <label for="inputPassword4" class="form-label">Job Title</label>
              <input type="text" class="form-control" id="inputPassword4" name="title">
            </div>
            <div class="col-md-8">
              <label for="inputPassword4" class="form-label">Location</label>
              <input type="text" class="form-control" id="inputPassword4" name="location">
            </div>
            <div class="col-md-16">
              <label for="inputPassword4" class="form-label">Description</label>
              <textarea name="description" class="form-control text-jqte" placeholder="Add Skills, About the job, company Description, Responsibilities"></textarea>
            </div>
            <input type="hidden" name="postedby" value="<?php echo $_SESSION['user_email']; ?>"/>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="save">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--End job Modal -->
  
  <div class="d-sm-flex align-items-center justify-content-end m-5 pt-5">
      <a href="job_upload.php"><button class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
      class="fa fa-plus"></i> Uploaded Jobs</button></a>
    </div>
  
  <div class="text-center pt-5">
    <h1 class="text-dark">Job-List</h1>
    <button class="btn btn-primary float-right btn-sm max-auto" style="width: 250px;" data-bs-toggle="modal"
      data-bs-target="#staticBackdrop1"><i class="fa fa-plus"></i>&nbsp;&nbsp; Post a Job Opportunity</button>
  </div>

  <!--job card -->
  <?php
  // Modify the SQL query to order by id in descending order
  $qry = "SELECT * FROM job ORDER BY id DESC";
  $result = mysqli_query($con, $qry);

  while ($row = mysqli_fetch_assoc($result)) {
  ?>
    <div class="container">
      <div class="card card-custom">
        <div class="card-body card-body-custom">
          <div class="job">
            <div class="col-md d-flex justify-content-center">
              <h3><?php echo htmlspecialchars($row['title']); ?></h3>
            </div>
            <div class="col-md d-flex justify-content-center">
              <h6><i class="fa fa-building" aria-hidden="true"></i>&nbsp;&nbsp; Company: <?php echo htmlspecialchars($row['company']); ?></h6>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <h6><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp; Location: <?php echo htmlspecialchars($row['location']); ?></h6>
            </div>
            <hr>
            <div class="py-3">
              <h6>Description</h6>
              <p class="desc"><?php echo htmlspecialchars($row['description']); ?></p>
            </div>
            <hr class="new">
            <div class="footer">
              <div class="modal-footer">
                <div class="col-md">
                  <h5><span class="badge text-bg-info"><i>Posted by: <?php echo htmlspecialchars($row['postedby']); ?></i></span></h5>
                </div>
                <form action="job_view.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>" />
                  <input type="submit" name="view" class="btn btn-primary" value="Read more.." />
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  <!--End job card -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
