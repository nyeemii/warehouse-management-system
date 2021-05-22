<?php
    session_start();
    $atmp=0;

    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'warehouse_management_system');

    if (isset($_POST['login-button'])) {
        $userName = mysqli_real_escape_string($db, $_POST['userName']);
        $passWord = mysqli_real_escape_string($db, $_POST['passWord']);
        $atmp = mysqli_real_escape_string($db, $_POST['hidden']);

        $check_username = "SELECT * FROM tbl_user WHERE username='$userName'";
        $results0 = mysqli_query($db, $check_username);
        if (mysqli_num_rows($results0) == 1) {
            $query = "SELECT * FROM tbl_user WHERE username='$userName' AND password='$passWord'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1) {
                if($atmp<=3) {
                    $loa_check_query = "SELECT * FROM tbl_user WHERE username='$userName'";
                    $result = mysqli_query($db, $loa_check_query);
                    $level_of_access = mysqli_fetch_assoc($result);
                    if ($level_of_access) {
                        if ($level_of_access['loa'] == 'Administrator') {
                            $sql = "SELECT * FROM tbl_user WHERE username='$userName'";
                            $result = $db->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    date_default_timezone_set('Asia/Manila');
                                    $time = date("h:i a");
                                    $date = date("M j, Y");
                                    $uName = $row['username'];
                                    $firstname = $row['firstname'];
                                    $lastname = $row['lastname'];
                                    $middlename = $row['middlename'];
                                    $query = "INSERT INTO tbl_audit_trail(username, firstname, lastname, middlename, 
                                    timein, activity, date) 
                                    VALUES('$uName', '$firstname', '$lastname', '$middlename', '$time', 'Logged In','$date')";
                                    mysqli_query($db, $query);
                                }
                            }
                            $_SESSION['username'] = $userName;
                            header('location: ./Admin-Homepage/admin-homepage.php');
                        }
                        if ($level_of_access['loa'] == 'Employee') {
                            $sql = "SELECT * FROM tbl_user WHERE username='$userName'";
                            $result = $db->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    date_default_timezone_set('Asia/Manila');
                                    $time = date("h:i a");
                                    $date = date("M j, Y");
                                    $uName = $row['username'];
                                    $firstname = $row['firstname'];
                                    $lastname = $row['lastname'];
                                    $middlename = $row['middlename'];
                                    $query = "INSERT INTO tbl_audit_trail(username, firstname, lastname, middlename, 
                                    timein, activity, date) 
                                    VALUES('$uName', '$firstname', '$lastname', '$middlename', '$time', 'Logged In','$date')";
                                    mysqli_query($db, $query);
                                }
                            }
                            $_SESSION['username'] = $userName;
                            header('location: ./Employee/Employee-Homepage/employee-homepage.php');
                        }
                        if ($level_of_access['loa'] == 'Branch') {
                            $sql = "SELECT * FROM tbl_user WHERE username='$userName'";
                            $result = $db->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    date_default_timezone_set('Asia/Manila');
                                    $time = date("h:i a");
                                    $date = date("M j, Y");
                                    $uName = $row['username'];
                                    $firstname = $row['firstname'];
                                    $lastname = $row['lastname'];
                                    $middlename = $row['middlename'];
                                    $query = "INSERT INTO tbl_audit_trail(username, firstname, lastname, middlename, 
                                    timein, activity, date) 
                                    VALUES('$uName', '$firstname', '$lastname', '$middlename', '$time', 'Logged In','$date')";
                                    mysqli_query($db, $query);
                                }
                            }
                            $_SESSION['username'] = $userName;
                            header('location: ./Branch/Branch-Homepage/branch-homepage.php');
                        }
                    }
                }
            } else {
                $atmp++;
                ?>
                    <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        Wrong username/password combination<br/>
                        Login Counter: <?php echo $atmp;?>
                    </div>
                <?php
            }
        } else {
            $atmp = 0;
            ?>
                <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    Invalid Username<br/>
                    <p>Login Counter: <?php echo $atmp;?></p>
                </div>
            <?php
        }
        if($atmp==3)
        {
            header('location: ./Forgot-password/forgot-password.php');
        }
    }
?>