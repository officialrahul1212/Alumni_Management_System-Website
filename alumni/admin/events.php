<?php
session_start();
include 'sidebar.php';
?>
<!doctype html>
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

  <!--event Modal -->
  <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Event</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="row g-3" action="event_data.php" method="POST" enctype="multipart/form-data">

            <div class="col-md-7 ">
              <label for="inputEmail4" class="form-label">Event</label>
              <input type="text" class="form-control" id="inputEmail4" name="event">
            </div>
            <div class="col-md-7">
              <label for="inputPassword4" class="form-label">Schedule</label>
              <input type="datetime-local" class="form-control datetimepicker" name="schedule">
            </div>
            <div class="col-md-16">
              <label for="inputPassword4" class="form-label">Description</label>
              <textarea name="description" class="form-control text-jqte"></textarea>
            </div>

            <div class="col-md-7">
              <label for="inputEmail4" class="form-label">Banner Image</label>
              <input type="file" class="form-control" id="inputEmail4" name="image">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="save">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--end event Modal -->




  <div class="container-fluid ">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">New Event </h1>
      <button class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
          class="fa fa-plus"></i> Event</button>
    </div>
  </div>


  <div class="row m-3">
    <div class="card card-shadow col-lg-12">
      <div class="card-body">


        <!-- <nav class="navbar navbar-light bg-light justify-content-end">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </nav> -->

        <table class='table table-bordered border-dark' id="dataTable" width="100%" style="color:black">
          <thead>
            <tr>
              <th class="text-center">#</th>
              <th>Event</th>
              <th>Schedule</th>
              <th>Description</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $qry = "SELECT * FROM event  ";
            $result = (mysqli_query($con, $qry));

            while ($row = mysqli_fetch_assoc($result)) {
              ?>

              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['event']; ?></td>
                <td><?php echo $row['schedule']; ?></td>
                <td><?php echo $row['description']; ?></td>

                <td>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <form action="event_view.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                      <input type="submit" name="view" class="btn btn-outline-primary mx-auto" value="View" />
                    </form>
                    <form action="event_manage.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                      <input type="submit" name="edit" class="btn btn-outline-primary mx-auto" value="Edit" />
                    </form>
                    <form action="event_delete.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                      <input type="submit" name="delete" class="btn btn-danger" value="Delete" />
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
            <a href="event_report.php" class="btn btn-warning text-dark w-15"><b>Event Report</b></a>
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