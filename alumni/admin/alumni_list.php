<?php
session_start();
// include 'session.php';
include 'sidebar.php';
// include '../include/config.php';

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
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">List Of Alumni</h1>

        </div>


        <div class="row m-3">
            <div class="card card-shadow col-lg-12">
                <div class="card-body">
                    <table class='table table-bordered border-dark' id="dataTable" width="100%" style="color:black">
                    <thead> <tr>
                            <th class="text-center">#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th  class="text-center">Action</th>
                        </tr>
</thead>
<tbody>
                        <?php
                        $qry = "SELECT * FROM user where role='user' ";
                        $result = (mysqli_query($con, $qry));

                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>

                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <!-- <td><img src="../img/<?php echo $row['image']; ?>" width='100' height="100"></td> -->
                                <td><a target="_blank" href="../img/<?php echo $row['image']; ?>"><img src="../img/<?php echo $row['image']; ?>" alt="Primary Image" onerror="this.onerror=null; this.src='img/profile.png';" width='100' height="100"></a></td>
                                
                                <td><?php echo $row['firstname'].' '.$row['middlename'].' '.$row['lastname']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td> 
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                        <form action="alumni.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                                            <input type="submit" name="view" class="btn btn-outline-primary" value="View" />

                                        </form>
                                        <form action="alumni_delete.php" method="POST">
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