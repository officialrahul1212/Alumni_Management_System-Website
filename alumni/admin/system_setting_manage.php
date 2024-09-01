<?php
session_start();
include 'sidebar.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <style>
    
    .card-shadow {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
      <h1 class="h3 mb-0 text-gray-800">Update System Info</h1>
    </div>
  </div>

  <div class="container d-flex justify-content-center">
    <div class="card card-shadow w-75 m-4">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="staticBackdropLabel">Site setting</h5>
        <a href="system_setting.php"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
      </div>
      <div class="card-body">
        <form class="row g-3" action="system_data.php" method="POST" enctype="multipart/form-data">
          <?php
          if (isset($_POST['edit'])) {
            $id = $_POST['id'];
            $qry = "SELECT * FROM system_settings WHERE id='$id'";
            $result = mysqli_query($con, $qry);
            $row = mysqli_fetch_assoc($result);

            $about = $row['about'];
          ?>
            <input type="hidden" name="id" value="<?php echo ($row['id']); ?>" />
            <div class="col-md-16">
              <label for="name" class="form-label">System Name</label>
              <input type="text" class="form-control" name="name" value="<?php echo ($row['name']); ?>" />
            </div>
            <div class="col-md-16">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" name="email" value="<?php echo ($row['email']); ?>" />
            </div>
            <div class="col-md-16">
              <label for="contact" class="form-label">Contact</label>
              <input type="text" class="form-control" name="contact" value="<?php echo ($row['contact']); ?>" />
            </div>
            <div class="col-md-16">
              <label for="about" class="form-label">About us</label>
              <textarea name="about" id="editor1" class="form-control"><?php echo ($about); ?></textarea>
            </div>
            <div class="col-md-6">
              <label for="image" class="form-label">Image</label>
              <input type="file" class="form-control" id="image" name="image">
              <div class="p-3">
                <img src="img/<?php echo ($row['image']); ?>" class="img-fluid" alt="..." style="max-width: 30%; height: 50%;">
              </div>
              <input type="hidden" name="current_image" value="<?php echo ($row['image']); ?>">
            </div>
          <?php
          }
          ?>
          <div class="modal-footer justify-content-end">
            <button type="submit" class="btn btn-primary" name="update">Update</button>
            <a href="system_setting.php" class="btn btn-dark">Close</a>
          </div>
        </form>
      </div>
    </div>
  </div>

 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
