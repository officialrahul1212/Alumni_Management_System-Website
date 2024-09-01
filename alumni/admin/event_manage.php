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
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Update Events</h1>
    </div>
  </div>

  <div class="container d-flex justify-content-center">
    <div class="card card-shadow w-50 m-4">
      <div class="modal-header  bg-primary text-white">
        <h5 class="modal-title" id="staticBackdropLabel">Event</h5>
        <a href="events.php"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
      </div>
      <div class="card-body">
        <form class="row g-3" action="event_managedata.php" method="POST" enctype="multipart/form-data">
          <?php
          if (isset($_POST['edit'])) {
            $id = $_POST['id'];
            $qry = "SELECT * FROM event WHERE id='$id'";
            $result = mysqli_query($con, $qry);
            $row = mysqli_fetch_assoc($result);
          ?>
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
            <div class="col-md-7">
              <label for="inputEmail4" class="form-label">Event</label>
              <input type="text" class="form-control" id="inputEmail4" name="event" value="<?php echo $row['event']; ?>">
            </div>
            <div class="col-md-7">
              <label for="inputPassword4" class="form-label">Schedule</label>
              <input type="datetime-local" class="form-control datetimepicker" name="schedule" value="<?php echo $row['schedule']; ?>">
            </div>
            <div class="col-md-16">
              <label for="inputPassword4" class="form-label">Description</label>
              <textarea name="description" class="form-control text-jqte"><?php echo $row['description']; ?></textarea>
            </div>
            <div class="col-md-7">
              <label for="inputEmail4" class="form-label">Banner Image</label>
              <input type="file" class="form-control" id="inputEmail4" name="image">
              <img src="img/<?php echo $row['image']; ?>" class="img-fluid" alt="..." style="max-width: 30%; height: 50%;">
            </div>
            <input type="hidden" name="current_image" value="<?php echo $row['image']; ?>">
          <?php
          }
          ?>
          <div class="modal-footer justify-content-end">
            <button type="submit" class="btn btn-primary" name="update">Update</button>
            <a href="events.php" class="btn btn-dark">Close</a>
          </div>
        </form>
      </div>
    </div>
  </div>

 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
