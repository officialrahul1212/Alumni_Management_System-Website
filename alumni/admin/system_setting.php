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

    <style type="text/css">
        .image {
            display: flex;
            width: 500px;
            height: 200px;
            align-items: center;
            justify-content: center;
            border: 2px solid;
            padding: 2px;
           
        }
        .card-shadow {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
    }
        /* .image img {
            max-width: calc(100%);
            max-height: calc(100%);
            border-radius: 100%;
        } */
         .img img{
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
         }
    </style>
</head>

<body>



    <!-- <div class="container-fluid ">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">site setting</h1>
      </div>
    </div> -->

    <!--system setting card -->
    <div class="container d-flex justify-content-center">
        <div class="card card-shadow w-75 m-4 ">
            <div class="card-header bg-primary text-white p-3">
<h4>                System info</h4>
            </div>
            <div class="card-body">
                <!-- <form class="row g-3" action="#" method="POST"> -->
                    <?php


                    $qry = "SELECT * FROM system_settings";
                    $result = mysqli_query($con, $qry);

                    $row = mysqli_fetch_assoc($result);

                    ?>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                    <div class="col-md-16">
                        <!-- <div>
                            <center>
                                <div class="image">
                                     <img src="img/  " class="" alt="Not Upload">
                                </div>
                            </center>
                        </div> -->
                        <div class="text-center img"><img src="img/<?php echo $row['image']; ?>" class="img-fluid" alt="..." style=" max-width: 50%; height: 50%;" >
                        </div>
                         <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label"><b>System Name</b>
                                    <p><?php echo $row['name']; ?></p>
                                </label>
                            </div>
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label"><b>Email</b>
                                    <p><?php echo $row['email']; ?></p>
                                </label>
                            </div>
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label"><b>Contact</b>
                                    <p><?php echo $row['contact']; ?></p>
                                </label>
                            </div>
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label"><b>About Us</b>
                                    <p><?php echo $row['about']; ?></p>
                                </label>

                            </div>

                        </div>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <form action="system_setting_manage.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                            <input type="submit" name="edit" class="btn btn-outline-primary mx-auto" value="Edit" />
                        </form>
                        <!-- <a href="alumni_list.php" class="btn btn-light">Close</a> -->
                        <?php mysqli_close($con);

                        ?>
               
            </div>
        </div>
    </div>

    <!--End system setting card -->




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