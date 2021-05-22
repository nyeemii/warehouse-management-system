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
    <link rel="stylesheet" href="../CSS/branch-incoming-product.css">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Branch Incoming Product</title>
</head>
<body>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../Branch-Homepage/branch-homepage.php">Profile</a>
        <a href="../Branch-Gallery/branch-gallery.php">Gallery</a>
        <a href="../Branch-Search/branch-search.php">Search</a>
        <a href="../Branch-Inventory/branch-inventory.php">Inventory</a>
        <a href="./branch-incoming-product.php" style="color: #4B778D">Incoming Product</a>
        <a href="../Branch-Billing/branch-billing.php">Billing</a>
        <button class="dropdown-btn">Maintenance
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="../Branch-Maintenance/branch-maintenance.php">Edit</a>
        </div>
        <a href="#">Help</a>
        <a href="branch-incoming-product.php?logout=<?php echo " $username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        <div class="container">
            <h1 class="incoming-product-h1">Incoming Product</h1>
            <div class="grid">
                <form class="search-form">
                    <label for="search">Search Product</label>
                    <input type="text" name="" id="search">
                    <input class="search-btn" type="submit" value="Search">
                </form>
                <form class="received-form">
                    <label for="received">Received Product</label>
                    <input type="text" name="" id="received">
                    <input class="received-btn" type="submit" value="Search">
                </form>
            </div>
            <table>
                <thead>
                    <th>Date</th>
                    <th>Brand Name</th>
                    <th>Type</th>
                    <th>Model</th>
                    <th>Quantity</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Jan. 6, 2021</td>
                        <td>Hanabishi</td>
                        <td>Air-Condition</td>
                        <td>HTAC25S</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>Jan. 11, 2021</td>
                        <td>Hanabishi</td>
                        <td>Air Circulator Fan</td>
                        <td>HACF88</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>Feb. 1, 2021</td>
                        <td>Whirlpool</td>
                        <td>Microwave Oven</td>
                        <td>MWX203BL</td>
                        <td>3</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    <script src="./index.js"></script>
</body>

</html>