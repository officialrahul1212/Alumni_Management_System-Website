<?php
session_start();
include 'include/config.php';
include 'include/header.php';
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
    .body {
      padding: 10px;
    }

    .gallery {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      /* Space between cards */
      justify-content: space-between;
    }

    .gallery-item {
      width: calc(33.333% - 20px);
      /* 3 cards per row, accounting for gaps */
      box-sizing: border-box;
      margin-bottom: 20px;
      /* Space between rows */
      border: 2px solid #ccc;
      /* Border around the card */
      border-radius: 5px;
      /* Rounded corners */
      padding: 10px;
      /* Padding inside the border */
      background-color: #fff;
      /* Background color for the card */
      display: flex;
      flex-direction: column;
      /* Stack image and description vertically */
      align-items: center;
      /* Center items horizontally */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      /* Shadow effect */
      height: auto;
      /* Adjust height based on content */
      max-height: 500px;
      /* Max height for the card to avoid excessive size */
      overflow: hidden;
      /* Hide overflow */
    }

    .gallery-item img {
      width: 100%;
      height: 200px;
      /* Fixed height for images */
      object-fit: cover;
      /* Ensure images cover the area without distortion */
      border-radius: 3px;
      /* Match border radius for consistency */
      display: block;
      margin-bottom: 10px;
      /* Space between image and description */
    }

    .description {
      text-align: center;
      padding: 10px 0;
      /* Padding inside the description area */
      overflow: hidden;
      /* Hide overflow text */
      text-overflow: ellipsis;
      /* Add ellipsis for very long text */
      display: -webkit-box;
      -webkit-box-orient: vertical;
      -webkit-line-clamp: 3;
      /* Limit description to 3 lines */
      line-clamp: 3;
      /* Same as above but standard */
      word-wrap: break-word;
      /* Break long words */
    }

    @media (max-width: 768px) {
      .gallery-item {
        width: calc(50% - 20px);
        /* 2 cards per row on tablets */
      }
    }

    @media (max-width: 480px) {
      .gallery-item {
        width: 100%;
        /* 1 card per row on phones */
      }
    }
  </style>
</head>

<body>

  <div class="card-header d-flex justify-content-center pt-5 mt-3">
    <h3 class="text-center"><u>Gallery</u></h3>
  </div>

  <div class="p-3">
    <div class="gallery">
      <?php
      $qry = "SELECT * FROM gallery ";
      $result = (mysqli_query($con, $qry));

      while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="gallery-item">
          <a target="_blank" href="admin/img/<?php echo $row['image']; ?>">
            <img src="admin/img/<?php echo $row['image']; ?>" alt="Image">
          </a>
          <div class="description"><?php echo $row['description']; ?></div>
        </div>
      <?php } ?>
    </div>
  </div>


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