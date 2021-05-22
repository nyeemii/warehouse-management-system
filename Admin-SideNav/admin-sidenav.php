<?php
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'warehouse_management_system');

    $username = $_SESSION['username'];
    if (!isset($_SESSION['username'])) {
        header('location: ../index.php');
    }
    if (isset($_GET['logout'])) {
        date_default_timezone_set('Asia/Manila');
        $time = date("h:i a");
        $date = date("D M j, Y");

        $query = "UPDATE tbl_audit_trail SET timeout = '$time', date = '$date' 
        WHERE username='$username' AND timeout IS NULL";
        mysqli_query($db, $query);
        session_destroy();
        unset($_SESSION['username']);
        header("location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="EN">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type = "image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <!--Dropdown-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Admin Sidenav</title>
    </head>
    <body id="body">
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#" style="color: #4B778D">Admin Homepage</a>
            <a href="#">Product Registration</a>
            <a href="#">Profile</a>
            <a href="#">Gallery</a>
            <a href="#">Inventory</a>
            <a href="#">Sales and Purchase</a>
            <a href="#">Search</a>
            <button class="dropdown-btn">Product Monitoring 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">Incoming Product</a>
                <a href="#">Outgoing Product</a>
                <a href="#">Stock Replenishment</a>
            </div>
            <a href="#">Daily Attendance</a>
            <button class="dropdown-btn">Report 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">Audit Trail</a>
                <a href="#">Sales Report</a>
                <a href="#">Purchase Report</a>
                <a href="../Admin-Report/Admin-Incoming-products-report.php">Incoming Products Report</a>
                <a href="../Admin-Report/Admin-Outgoing-products-report.php">Outgoing Products Report</a>
                <a href="../Admin-Report/Admin-Stock-replenishment-report">Stock Replenishment Report</a>
                <a href="../Admin-Report/Admin-Attendance-report.php">Attendance Report</a>
                <a href="../Admin-Report/Admin-Billing-report.php">Billing Report</a>
            </div>
            <button class="dropdown-btn">Maintenance 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">Add</a>
                <a href="../Admin-Maintenance/admin-edit.php">Edit</a>
                <a href="../Admin-Maintenance/admin-backup-restore.php">Backup & Restore</a>
            </div>
            <a href="#">Help</a>
            <a href="admin-sidenav.php?logout=<?php echo "$username"?>">Logout</a>
        </div>
        <div id="main">
            <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
            <div class="container">
                
            </div>
        </div>
        <script src="../index.js"></script>
    </body>
</html>