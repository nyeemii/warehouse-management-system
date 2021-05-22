<?php
    if (isset($_POST['btn_submit'])) {
        $productId = mysqli_real_escape_string($db, $_POST['productId']);
        $uname = mysqli_real_escape_string($db, $_POST['uname']);

        $sql = "SELECT * FROM tbl_incoming_product WHERE productID = '$productId'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $brandName = $row['brandName'];
                $type = $row['type'];
                $model = $row['model'];
                $price = $row['price'];
                $quantity = $row['quantity'];

                $sql1 = "SELECT * FROM tbl_product WHERE brandName = '$brandName' AND type = '$type'
                AND model = '$model'";
                $result1 = $db->query($sql1);
                if ($result1->num_rows > 0) {
                    while($row1 = $result1->fetch_assoc()) {
                        $qty = $row1['quantity'] + $quantity;
                        $productModel = $row1['model'];
                        date_default_timezone_set('Asia/Manila');
                        $date = date("M j, Y");
                        $time = date("h:i a");

                        $query = "UPDATE tbl_product SET quantity = '$qty' WHERE model = '$productModel'";
                        mysqli_query($db, $query);

                        $query = "INSERT INTO tbl_sales_and_purchase(typeOfTransaction, date, brandName, type, quantity, price)
                        VALUES('Purchase', '$date', '$brandName', '$type', '$quantity', '$price')";
                        mysqli_query($db, $query);

                        $sql2 = "SELECT * FROM tbl_user WHERE username = '$uname'";
                        $result2 = $db->query($sql2);
                        if ($result2->num_rows > 0) {
                            while($row2 = $result2->fetch_assoc()) {
                                $firstname = $row2['firstname'];
                                $lastname = $row2['lastname'];
                                $middlename = $row2['middlename'];

                                $query = "INSERT INTO tb_daily_attendance(time, date, staff, typeOfTransaction, brand, type, quantity)
                                VALUES('$time', '$date', '$firstname $lastname', 'Received Product', '$brandName',
                                '$type', '$quantity')";
                                mysqli_query($db, $query);
                            }
                        }

                        $query = "DELETE FROM tbl_incoming_product WHERE productID = '$productId';";
                        mysqli_query($db, $query);

                        $sql = "SELECT * FROM tbl_user WHERE username='$uname'";
                        $result = $db->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                date_default_timezone_set('Asia/Manila');
                                $time = date("h:i a");
                                $date = date("M j, Y");
                                $uName = $row['username'];
                                $fname = $row['firstname'];
                                $lname = $row['lastname'];
                                $mname = $row['middlename'];
                                $query = "INSERT INTO tbl_audit_trail(username, firstname, lastname, middlename,
                                timein, activity, date)
                                VALUES('$uName', '$fname', '$lname', '$mname', '$time', 'Received Product','$date')";
                                mysqli_query($db, $query);
                            }
                        }

                        ?>
                          <div class="alert">
                          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                              Received Product
                          </div>
                        <?php
                    }
                } else {
                    $sql = "SELECT * FROM tbl_incoming_product WHERE productID = '$productId'";
                    $result = $db->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $brandName = $row['brandName'];
                            $type = $row['type'];
                            $model = $row['model'];
                            $price = $row['price'];
                            $quantity = $row['quantity'];
                            date_default_timezone_set('Asia/Manila');
                            $date = date("M j, Y");
                            $time = date("h:i a");

                            $query = "INSERT INTO tbl_sales_and_purchase(typeOfTransaction, date, brandName, type, quantity, price)
                            VALUES('Purchase', '$date', '$brandName', '$type', '$quantity', '$price')";
                            mysqli_query($db, $query);

                            $sql2 = "SELECT * FROM tbl_user WHERE username = '$uname'";
                            $result2 = $db->query($sql2);
                            if ($result2->num_rows > 0) {
                                while($row2 = $result2->fetch_assoc()) {
                                    $firstname = $row2['firstname'];
                                    $lastname = $row2['lastname'];
                                    $middlename = $row2['middlename'];

                                    $query = "INSERT INTO tb_daily_attendance(time, date, staff, typeOfTransaction, brand, type, quantity)
                                    VALUES('$time', '$date', '$firstname $middlename $lastname', 'Received Product', '$brandName',
                                    '$type', '$quantity')";
                                    mysqli_query($db, $query);
                                }
                            }

                            $query = "DELETE FROM tbl_incoming_product WHERE productID = '$productId';";
                            mysqli_query($db, $query);

                            $sql = "SELECT * FROM tbl_user WHERE username='$uname'";
                            $result = $db->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    date_default_timezone_set('Asia/Manila');
                                    $time = date("h:i a");
                                    $date = date("M j, Y");
                                    $uName = $row['username'];
                                    $fname = $row['firstname'];
                                    $lname = $row['lastname'];
                                    $mname = $row['middlename'];
                                    $query = "INSERT INTO tbl_audit_trail(username, firstname, lastname, middlename,
                                    timein, activity, date)
                                    VALUES('$uName', '$fname', '$lname', '$mname', '$time', 'Received Product','$date')";
                                    mysqli_query($db, $query);
                                }
                            }
                        }
                    }

                    ?>
                      <div class="alert">
                      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                          Received unregistered product
                      </div>
                    <?php
                }
            }
        } else {
            ?>
              <div class="alert">
              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                  Invalid tracking id
              </div>
            <?php
        }
    }
?>
