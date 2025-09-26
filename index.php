<!DOCTYPE html>
<html>
<head>
  <title>My First PHP Project</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 40px;
      background-color: #f4f4f9;
      color: #333;
    }
    h1 {
      color: #4a90e2;
    }
    p {
      margin: 10px 0;
    }
    .highlight {
      color: #e94e77;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <h1>Hello from PHP!</h1>
  <?php
    // Set timezone to IST
    date_default_timezone_set("Asia/Kolkata");

    $name = "Vasu";
    $time = date("h:i:s A");
    $date = date("l, d F Y"); // e.g., Wednesday, 11 September 2025

    echo "<p>Hi, <span class='highlight'>$name</span> 👋</p>";
    echo "<p>The current server time is <span class='highlight'>$time</span> IST.</p>";
    echo "<p>Today's date is <span class='highlight'>$date</span>.</p>";
    echo "<p>Keep learning and building cool projects with PHP! 🚀</p>";
  ?>
</body>
</html>
