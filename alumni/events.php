<?php
session_start();
include 'include/config.php'; 
include 'include/header_new.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .notification-card {
            display: flex;
            align-items: center;
            height: 100px;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
            background-color: #fff;
            overflow: hidden;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .notification-card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 2px solid #007bff;
            object-fit: cover;
            margin-right: 15px;
        }

        .notification-card .card-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }

        .notification-card .card-text {
            font-size: 0.875rem;
            margin: 0;
            color: #666;
            font-weight: bold;
        }

        .notification-card .card-title {
            font-size: 1rem;
            margin: 0;
            font-weight: bold;
        }

        .notification-card .description {
            font-size: 0.75rem;
            color: #888;
            margin-top: 5px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2; /* Show only two lines */
            -webkit-box-orient: vertical;
        }
    </style>
</head>

<body>

    <div class="container mt-4">
        <h1 class="mb-4 pt-5">Alumni Events</h1>
        <div class="row">
            <?php
            // Modify the SQL query to order by schedule in descending order
            $sql = "SELECT * FROM event ORDER BY schedule DESC";
            $result = $con->query($sql);
            while ($row = $result->fetch_assoc()): 
            ?>

                <div class="col-12 mb-3">
                    <div class="notification-card">
                        <img src="admin/img/<?php echo $row['image']; ?>" alt="<?php echo htmlspecialchars($row['event']); ?>">
                        <div class="card-content">
                            <p class="card-text">
                                <?php echo date('F j, Y', strtotime($row['schedule'])); ?>
                            </p>
                            <h5 class="card-title"><?php echo htmlspecialchars($row['event']); ?></h5>
                            <p class="description"><?php echo htmlspecialchars($row['description']); ?></p>
                        </div>
                        <form action="event_details.php" method="POST" class="d-flex align-items-center">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                            <input type="submit" name="view" class="btn btn-primary btn-sm" value="View Details" />
                        </form>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
