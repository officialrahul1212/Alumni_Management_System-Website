
<?php
include 'session.php';

?><!DOCTYPE html> <!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="img/favicon.png">
  <title>Alumni Management System</title>
  <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .modal-end .modal-dialog {
      position: absolute;
      right: 0;
      margin: 0;
      padding-top: 50px;
      padding-right: 30px;
    }

    .modal-backdrop.show {
      opacity: 0 !important;
    }

    .modal-content {
      background-color: rgba(255, 255, 255, 0.8);;
      border: 1px solid black;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
      
    }
   
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
         Alumni Management System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="alumni_list.php">Alumni</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="job.php">Jobs</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="events.php">Events</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="donation.php">Donation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="feedback.php">Feedback</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2"> Profile</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Modal -->
  <div class="modal fade modal-end card-shadow" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-sm ">
      <div class="modal-content ">
        <div class="modal-header">
          <h6 class="modal-title" id="exampleModalLabel"><?php echo $_SESSION['user_firstname'].' '.$_SESSION['user_lastname']; ?></h6>
          <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        </div>
        <div class="modal-body">
          <a class="dropdown-item" href="profile.php">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> &nbsp;
                Profile Manage &nbsp; &nbsp;
          </a>
          <hr>
          <a class="dropdown-item" href="events.php">
            <i class="fa fa-calendar fa-sm fa-fw mr-2 text-gray-400"></i> &nbsp;
           Event &nbsp; &nbsp;
          </a>
          <hr>
          <a class="dropdown-item" href="alumni_list.php">
            <i class="fa fa-users fa-sm fa-fw mr-2 text-gray-400"></i> &nbsp;
            Alumni &nbsp; &nbsp;
          </a>
          <hr>
          <a class="nav-link" href="job.php">
            <i class="fa fa-briefcase fa-sm fa-fw mr-2 text-gray-400" aria-hidden="true"></i> &nbsp;
            Jobs &nbsp; &nbsp;
          </a> 
          <hr>
          <!-- <a class="nav-link" href="job.php">
            <i class="fa fa-image" aria-hidden="true"></i> &nbsp;
            Gallery &nbsp; &nbsp;
          </a>
          <hr>
          <a class="nav-link" href="job.php">
            <i class="fa fa-credit-card" aria-hidden="true"></i> &nbsp;
            Donations &nbsp; &nbsp;
          </a>
          <hr> -->
          <!-- <a class="nav-link" href="logout.php">
            <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;
            Feedback &nbsp; &nbsp;
          </a>
          <hr> -->
        
          <a class="nav-link" href="logout.php">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
