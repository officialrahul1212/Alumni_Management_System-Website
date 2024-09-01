<?php
session_start();
include 'include/config.php';
include 'include/header_new.php';
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
   
    .feedback-form {
      max-width: 600px;
      margin: 0 auto;
      padding: 30px;
      border: 1px solid #ddd;
      border-radius: 10px;
      background-color: #f9f9f9;
    }
    .feedback-form h2 {
      margin-bottom: 20px;
    }
    .card-shadow {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

  <div class="container pt-5 mt-5">
    <div class="feedback-form card-shadow">
      <h2>Feedback Form</h2>
      <form action="feedback_data.php" method="POST">
      <input type="hidden" name="email" value="<?php echo $_SESSION['user_email']; ?>"/>
      <input type="hidden" name="name" value="<?php echo $_SESSION['user_firstname']." ".$_SESSION['user_middlename']." ".$_SESSION['user_lastname']; ?>"/>
        <div class="form-group">
          <label for="subject">Subject</label>
          <input type="text" class="form-control" id="subject" placeholder="Enter the subject" name="subject"  required>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" rows="5" placeholder="Enter your message" name="message" required></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit Feedback</button>
      </form>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
