<?php
session_start();
include 'sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <style>
        .card-shadow {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
    }
    </style>
</head>

<body style="color:black">

  <!--job Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">New Entry</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="row g-3" action="joblist_data.php" method="POST">

            <div class="col-md-16">
              <label for="inputEmail4" class="form-label">Company</label>
              <input type="text" class="form-control" id="inputEmail4" name="company">
            </div>
            <div class="col-md-16">
              <label for="inputPassword4" class="form-label">Job Title</label>
              <input type="text" class="form-control" id="inputPassword4" name="title">
            </div>
            <div class="col-md-16">
              <label for="inputPassword4" class="form-label">Location</label>
              <input type="text" class="form-control" id="inputPassword4" name="location">
            </div>
            <div class="col-md-16">
              <label for="inputPassword4" class="form-label">Description</label>
              <textarea name="description" class="form-control text-jqte" placeholder="Add Skills,About the job, company Description,Responsibilities"></textarea>
            </div>
            <input type="hidden" name="postedby" value="<?php echo $_SESSION['admin_email']; ?>">
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


  <div class="container-fluid ">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Jobs List </h1>
      <button class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
          class="fa fa-plus"></i> New-Job</button>
    </div>

    <div class="card card-shadow mb-4">
      <div class="card-body text-dark">

        <table class="table table-bordered table-condensed table-hover " id="dataTable" width="100%"
          style="color:black">
          <thead>
            <tr>
              <th class="text-center">#</th>
              <th>Company</th>
              <th>Job Title</th>
              <th>Posted By</th>
              <th>Post Date</th>
              <th class="text-center">Action</th>

            </tr>
          </thead>

          <tbody>
            <?php
            $qry = "SELECT * FROM job  ";
            $result = (mysqli_query($con, $qry));

            while ($row = mysqli_fetch_assoc($result)) {
              ?>

              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['company']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['postedby']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <form action="job_view.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                      <button type="submit" class="btn btn-outline-primary mx-auto" name="view">
                        View</button>
                    </form>
                    <form action="job_manage.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                      <button type="submit" class="btn btn-outline-primary mx-auto" name="edit">
                        Edit</button>
                    </form>
                    <form action="job_delete.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                      <button type="submit" class="btn btn-danger " name="delete"> Delete</button>
                    </form>
                  </div>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-16 d-flex align-items-center justify-content-end m-3 pt-5">
            <a href="job_report.php" class="btn btn-warning text-dark w-15"><b>job Report</b></a>
        </div>
  </div>











  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>