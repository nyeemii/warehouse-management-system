<?php
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'warehouse_management_system');
    include('server.php');

    $username = $_SESSION['username'];
    if (!isset($_SESSION['username'])) {
        header('location: ../../index.php');
    }
    if (isset($_GET['logout'])) {
        date_default_timezone_set('Asia/Manila');
        $time = date("h:i a");
        $date = date("M j, Y");

        $query = "UPDATE tbl_audit_trail SET timeout = '$time', date = '$date'
        WHERE username='$username' AND timeout IS NULL";
        mysqli_query($db, $query);
        session_destroy();
        unset($_SESSION['username']);
        header("location: ../../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/employee-maintenance.css">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Employee Edit</title>
</head>

<body>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../Employee-Homepage/employee-homepage.php">Profile</a>
        <a href="../Employee-Gallery/employee-gallery.php">Gallery</a>
        <a href="../Employee-Barcode-Generator/employee-barcode-generator.php">Barcode Generator</a>
        <a href="../Employee-Search/employee-search.php">Search</a>
        <button class="dropdown-btn">Product Monitoring
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="../Employee-Incoming-Product/employee-incoming-product.php">Incoming Product</a>
            <a href="../Employee-Outgoing-Product/employee-outgoing-product.php">Outgoing Product</a>
            <a href="../Employee-Stock-Replenishment/employee-stock-replenishment.php">Stock Replenishment</a>
        </div>
        <button class="dropdown-btn">Maintenance
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="./employee-maintenance.php" style="color: #51c4d3">Edit</a>
        </div>
        <a href="../Employee-Help/employee-help.php">Help</a>
        <a href="employee-maintenance.php?logout=<?php echo " $username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        <div class="container">
            <h1 class="edit-header">Edit</h1>
            <form action="employee-maintenance.php" method="POST">
                <h3>Personal Information</h3>
                <input type="hidden" name="uname" value=<?php echo $username;?> />
                <div class="info">
                    <label class="info-items" for="email-address">Email Address</label>
                    <input type="email" name="email" id="email-address">
                </div>
                <div class="info">
                    <label class="info-items" for="edit-password">Password</label>
                    <input type="password" name="password" id="edit-password">
                </div>
                <div class="info">
                    <label class="info-items" for="confirm-password">Confirm Password</label>
                    <input type="password" name="confPassword" id="confirm-password">
                </div>
                <div class="info">
                    <label class="info-items" for="address">Address</label>
                    <input type="text" name="address" id="address">
                </div>
                <div class="info">
                    <label class="info-items" for="contact-number">Contact Number</label>
                    <input type="text" name="contactNumber" id="contact-number">
                </div>
                <input type="submit" name="btn_edit" value="Edit">
            </form>
        </div>
    </div>
    <script src="../index.js"></script>
</body>

</html>