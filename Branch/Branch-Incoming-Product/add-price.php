
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
        <a href="" style="color: #4B778D">Incoming Product</a>
        <a href="#">Billing</a>
        <button class="dropdown-btn">Maintenance
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="../Branch-Maintenance/branch-maintenance.php">Edit</a>
        </div>
        <a href="#">Help</a>
        <a href="add-price.php?logout=<?php echo " $username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        
            <div id="myForm" class="form">
                <div class="form-content">
                    <div class="form-header">
                        <span class="close"><a href="./branch-incoming-product.php">&times;</a></span>
                        <h3 class="header">Add Product</h3>
                    </div>
                    <div class="form-body">
                        <form action="">
                            <label class="add-label" for="add-product">Tracking ID</label>
                            <input class="add-input" type="text" name="" id="add-product" placeholder="Input ID">
                            <input type="button" value="View">
                            <div class="form-info">
                                <div>
                                    <p>Date</p>
                                    <p>Brand Name</p>
                                    <p>Type</p>
                                    <p>Model</p>
                                    <p>Quantity</p>
                                </div>
                                <div>
                                    <p>Jan. 6, 2021</p>
                                    <p>Hanabishi</p>
                                    <p>Air-Condition</p>
                                    <p>HTAC25S</p>
                                    <p>15</p>
                                </div>
                            </div>
                            <div class="price-div">
                                <label class="price-label" for="price">Price</label>
                                <input class="price-input" type="text" name="" id="price">
                            </div>
                            <div class="btn-div">
                                <input class="add-btn" type="button" value="Add">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
 
    </div>
    <script src="./index.js"></script>
</body>

</html>




