<?php
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'warehouse_management_system');

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
    <link rel="stylesheet" href="../CSS/employee-profile.css">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type = "image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Employee Profile</title>
</head>
<body>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="./employee-homepage.php" style="color: #4B778D">Profile</a>
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
                <a href="../Employee-Maintenance/employee-maintenance.php">Edit</a>
            </div>
        <a href="../Employee-Help/employee-help.php">Help</a>
        <a href="employee-homepage.php?logout=<?php echo "$username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        <div class="container">
           <h1 class="profile-header">Profile</h1>
           <?php
                $sql = "SELECT * FROM tbl_user WHERE username='$username'";
                $result = $db->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        ?>
                            <h3 class="name"><?php echo $row['firstname'] . " " . $row['middlename'] . " " . $row['lastname'];?></h3>
                            <div class="div-info">
                                <p class="info" style="">Level of Access: </p>
                                <p class="info1"><?php echo $row['loa'];?></p>
                            </div>
                            <div class="div-info">
                                <p class="info">Phone Number: </p>
                                <p class="info1"><?php echo $row['contactnumber'];?></p>
                            </div>
                            <div class="div-info">
                                <p class="info">Email Address: </p>
                                <p class="info1"><?php echo $row['email'];?></p>
                            </div>
                            <div class="div-info">
                                <p class="info">Address: </p>
                                <p class="info1"><?php echo $row['address'];?></p>
                            </div>
                            <div class="div-info">
                                <p class="info">Birthdate: </p>
                                <p class="info1"><?php echo $row['birthdate'];?></p>
                            </div>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
    <script src="../index.js"></script>
</body>
</html>