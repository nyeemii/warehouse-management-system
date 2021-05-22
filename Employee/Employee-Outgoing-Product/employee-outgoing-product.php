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
    <link rel="stylesheet" href="../CSS/employee-outgoing-product.css">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type = "image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Employee Outgoing Product</title>
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
            <a href="./employee-outgoing-product.php" style="color: #51c4d3">Outgoing Product</a>
            <a href="../Employee-Stock-Replenishment/employee-stock-replenishment.php">Stock Replenishment</a>
        </div>
        <button class="dropdown-btn">Maintenance 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="../Employee-Maintenance/employee-maintenance.php">Edit</a>
            </div>
        <a href="../Employee-Help/employee-help.php">Help</a>
        <a href="employee-outgoing-product.php?logout=<?php echo "$username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        <div class="container">
                <h1 class="outgoing-product-h1">Outgoing Product</h1>
                <div class="grid">
                    <form action="employee-outgoing-product.php" method="POST" class="search-form">
                        <label for="search">Search Product</label>
                        <input type="text" name="search" id="search" placeholder="Enter product information" required>
                        <input class="search-btn" name="btn_search" type="submit" value="Search">
                    </form>
                    <form action="employee-outgoing-product.php" method="POST" class="received-form">
                        <input type="hidden" name="uname" value=<?php echo $username;?> />
                        <label for="received">Received Product</label>
                        <input type="text" name="trackingID" id="received" placeholder="Enter tracking id" required>
                        <input class="received-btn" name="btn_submit" type="submit" value="Deliver">
                    </form>
                </div>
            <table>
                <thead>
                    <th>Tracking ID</th>
                    <th>Product ID</th>
                    <th>Date</th>
                    <th>Brand Name</th>
                    <th>Type</th>
                    <th>Model</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Store</th>
                </thead>
                <tbody>
                    <a class="refresh" href="employee-outgoing-product.php">Refresh</a>
                    <?php
                        if (isset($_POST['btn_search'])) {
                            $search = mysqli_real_escape_string($db, $_POST['search']);

                            $sql = "SELECT * FROM tbl_outgoing_product WHERE id='$search' OR product_id='$search' OR brandName='$search'
                            OR type='$search' OR model='$search' OR date='$search' OR quantity='$search' OR store='$search'";
                            $result = $db->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['product_id'];?></td>
                                            <td><?php echo $row['brandName'];?></td>
                                            <td><?php echo $row['type'];?></td>
                                            <td><?php echo $row['model'];?></td>
                                            <td><?php echo $row['date'];?></td>
                                            <td><?php echo $row['quantity'];?></td>
                                            <td><?php echo "₱".$row['price'];?></td>
                                            <td><?php echo $row['store'];?></td>
                                        </tr>
                                    <?php
                                }
                            } else {
                                ?>
                                    <tr>
                                        <td>0 Result</td>
                                        <td>0 Result</td>
                                        <td>0 Result</td>
                                        <td>0 Result</td>
                                        <td>0 Result</td>
                                        <td>0 Result</td>
                                        <td>0 Result</td>
                                        <td>0 Result</td>
                                        <td>0 Result</td>
                                    </tr>
                                <?php
                            }
                        } else {
                            $sql = "SELECT * FROM tbl_outgoing_product";
                            $result = $db->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['product_id'];?></td>
                                            <td><?php echo $row['date'];?></td>
                                            <td><?php echo $row['brandName'];?></td>
                                            <td><?php echo $row['type'];?></td>
                                            <td><?php echo $row['model'];?></td>
                                            <td><?php echo $row['quantity'];?></td>
                                            <td><?php echo "₱".$row['price'];?></td>
                                            <td><?php echo $row['store'];?></td>
                                        </tr>
                                    <?php
                                }
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../index.js"></script>
</body>
</html>
