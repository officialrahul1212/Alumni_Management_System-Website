<?php
session_start();
include 'include/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 50px;
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .event-card {
            width: 100%;
            max-width: 700px;
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
        }
        .event-image {
            width: 100%;
            height: auto;
            max-height: 300px;
            object-fit: cover;
            margin-bottom: 1rem;
            border-radius: 0.25rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow effect added */
        }
        .event-title {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
            color: #333;
        }
        .event-schedule {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 1rem;
        }
        .event-description {
            font-size: 1rem;
            color: #666;
        }
       
        
    </style>
</head>
<body>
<?php
if (isset($_POST['view'])) {
    $id = $_POST['id'];

    $qry = "SELECT * FROM event WHERE id='$id'";
    $result = mysqli_query($con, $qry);

    if ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="event-card">
            <!-- Event Image -->
            <img src="admin/img/<?php echo $row['image']; ?>" alt="<?php echo $row['event']; ?>" class="event-image">
            
            <!-- Event Title -->
            <h1 class="event-title"><?php echo $row['event']; ?></h1>
            
            <!-- Event Schedule -->
            <p class="event-schedule">Schedule: <?php echo date('F j, Y, g:i A', strtotime($row['schedule'])); ?></p>
            
            <!-- Event Description -->
            <p class="event-description">   Description: <?php echo nl2br(htmlspecialchars($row['description'])); ?></p>
            
            <!-- Close Button -->
            <a href="events.php" class="btn btn-dark">Close</a>
        </div>
        <?php
    } else {
        echo "<p class='text-center'>Event not found.</p>";
    }
    mysqli_close($con);
}
?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
