<?php
session_start();
include 'sidebar.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .card-shadow {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
    }
    </style>
</head>

<body>



    <div class="container-fluid ">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Courses</h1>
      </div>
    </div>

    <!--course card -->
    <div class="container d-flex justify-content-center">
    <div class="card card-shadow w-50 m-4 ">
    <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Course </h5>
          <a href="course.php"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
        </div>
      <div class="card-body">
        <form class="row g-3" action="course_managedata.php" method="POST">
          <?php
          if(isset($_POST['edit']))
          {
            $id=$_POST['id'];

            $qry="SELECT * FROM course where id='$id'";
            $result=mysqli_query($con,$qry);

            $row=mysqli_fetch_assoc($result);
          
          ?>
        <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
          <div class="col-md-16">
            <label for="inputEmail4" class="form-label">Course</label>
            <input type="text" class="form-control"  name="course" value="<?php echo $row['course'];?>"/>
            <label for="inputEmail4" class="form-label"></label>
          </div>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="submit" class="btn btn-primary " name="update" >Update</button>
        <a href="course.php" class="btn btn-light">Close</a>
        <?php  mysqli_close($con);
        } 
        ?>
        </form>
      </div>
    </div></div>

    <!--End course card -->



  



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