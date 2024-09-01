<?php
session_start();
include 'include/config.php';
include 'include/header_new.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Alumni</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding-top: 80px; 
        }

        .container1 {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 2.5em;
        }

        .search-bar {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .search-bar input[type="text"] {
            width: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px 0 0 4px;
            font-size: 1em;
        }

        .search-bar button {
            padding: 10px 20px;
            border: none;
            background-color: #0d6efd;
            color: #fff;
            font-size: 1em;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #0d6edd;
        }

        .alumni-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .alumni-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.2s;
            text-align: center;
        }

        .alumni-card:hover {
            transform: translateY(-5px);
        }

        .alumni-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 15px auto;
            object-fit: cover;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
            border: 2px solid #f2f2f2;
        }

        .alumni-details {
            padding: 15px;
        }

        .alumni-details h2 {
            margin: 10px 0;
            color: #333;
            font-size: 1.5em;
        }

        .alumni-details p {
            margin: 5px 0;
            color: #666;
            font-size: 0.9em;
        }

        .card.mb-4.p-4 {
            background-color: #fff;
            border: none;
            box-shadow: none;
        }

    </style>
</head>
<body>
    <div class="container1">
        <h1>Alumni Directory</h1>

        <?php
        $search_batch = isset($_POST['search_batch']) ? $_POST['search_batch'] : '';

        $qry = "SELECT * FROM user WHERE role='user' and status='verified'";
        if ($search_batch) {
            $qry .= " AND batch LIKE '%" . mysqli_real_escape_string($con, $search_batch) . "%'";
        }
        $result = mysqli_query($con, $qry);
        ?>

        <form method="POST" class="mb-4 p-4">
            <div class="search-bar">
                <input type="text" name="search_batch" placeholder="Search by Batch"
                       value="<?php echo htmlspecialchars($search_batch); ?>">
                <button>Search</button>
            </div>
        </form>

        <div class="alumni-grid">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="alumni-card">
                    <img src="img/<?php echo $row['image']; ?>" alt="Alumni Image">
                    <div class="alumni-details">
                        <h2><?php echo $row['firstname'] . " " . $row['middlename'] . " " . $row['lastname']; ?></h2>
                        <p>Email: <?php echo $row['email']; ?></p>
                        <p>Mobile: <?php echo "+91 " . $row['contact']; ?></p>
                        <p>Course: <?php echo $row['course']; ?></p>
                        <p>Batch: <?php echo $row['batch']; ?></p>
                        <p>Currently working in: <?php echo $row['connected_to']; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>
</html>
