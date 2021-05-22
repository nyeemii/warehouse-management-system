<?php
    if (isset($_POST['btn_add'])) {
        $uname = mysqli_real_escape_string($db, $_POST['uname']);
        $productID = mysqli_real_escape_string($db, $_POST['productID']);
        
        $sql = "SELECT * FROM tbl_user WHERE username='$uname' ";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $store = $row['store'];

                $sql = "SELECT * FROM tbl_product_store WHERE store='$store' and productId = '$productID'";
                $result = $db->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $brandName = $row['brandName'];
                        $type = $row['type'];
                        $model = $row['model'];
                        $quantity = $row['quantity'];
                        $price = $row['price'];

                        $total = $quantity - 1;

                        date_default_timezone_set('Asia/Manila');
                        $date = date("M j, Y");
                        $time = date("h:i a");

                        if($quantity == 0) {
                            ?>
                                <div class="alert">
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                    The quantity of that product is 0
                                </div>
                            <?php
                        } else {
                            $query = "INSERT INTO tbl_billing(date, username, brandName, type, model, price)
                            VALUES('$date', '$uname', '$brandName', '$type', '$model', '$price')";
                            mysqli_query($db, $query);
                        }

                        $query = "INSERT INTO tbl_sales_and_purchase(typeOfTransaction, date, brandName, type, price, store)
                        VALUES('Sales', '$date', '$brandName', '$type', '$price', '$store')";
                        mysqli_query($db, $query);

                        $query = "INSERT INTO tbl_billing_report(date, store, brandName, type, model, price)
                        VALUES('$date', '$store', '$brandName', '$type', '$model', '$price')";
                        mysqli_query($db, $query);


                        $query = "UPDATE tbl_product_store SET quantity = '$total' WHERE productId = '$productID' 
                        AND store = '$store'";
                        mysqli_query($db, $query);
                    }
                } else {
                    ?>
                        <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            Invalid product ID
                        </div>
                    <?php
                }
            }
        }
    }


    if (isset($_POST['btn-submit'])) {
        $uname = mysqli_real_escape_string($db, $_POST['uname']);

        $query = "DELETE FROM tbl_billing WHERE username = '$uname';";
        mysqli_query($db, $query);

        ?>
            <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                Transaction End
            </div>
        <?php
    }
?>