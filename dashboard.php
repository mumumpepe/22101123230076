<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: login.html"); // Redirect to login page if not logged in
    exit();
}



?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        /* Your CSS styles go here */

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 100px);
        }

        .dashboard-links {
            text-align: center;
        }

        .dashboard-link {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease-in-out;
        }

        .dashboard-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to the Dashboard</h1>
        <p>Hello, <?php echo $_SESSION["username"]; ?></p>
    </div>

    <div class="container">
        <div class="dashboard-links">
            <a class="dashboard-link" href="request_sick_sheet.php">Request Sick Sheet</a>
            <a class="dashboard-link" href="view_messages.php">View Messages</a>
            <a class="dashboard-link" href="update_profile.php">Update Profile</a>
            <!-- Add more dashboard links here -->
            <a class="dashboard-link" href="logout.php">Log Out</a>
        </div>
    </div>

    <div class="content">
        <!-- Additional content for the dashboard -->
    </div>
</body>
</html>
