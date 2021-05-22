<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require './../vendor/autoload.php';

    $mail = new PHPMailer(true);

    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'warehouse_management_system');

    if (isset($_POST['submit-btn'])) {
        $userName = mysqli_real_escape_string($db, $_POST['userName']);
        $email = mysqli_real_escape_string($db, $_POST['email']);

        $query = "SELECT * FROM tbl_user WHERE username='$userName'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $query1 = "SELECT * FROM tbl_user WHERE username='$userName'";
            $result1 = $db->query($query1);
            $row = $result1->fetch_assoc();
            if($row['email']!="$email")
            {
                ?>
                    <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        Email not exist to that username!
                    </div>
                <?php
            } else {
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
                        VALUES('$userName', '$firstname', '$lastname', '$middlename', '$time', 'Retrieved forgot password','$date')";
                        mysqli_query($db, $query);
                    }
                }

                $query2 = "SELECT * FROM tbl_user WHERE username='$userName'";
                $result2 = mysqli_query($db, $query2);
                $row2 = $result2->fetch_assoc();

                try {
                    $generated_password = $row2['password'];
                    //Server settings
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'jhaycee122098@gmail.com';
                    $mail->Password = 'janchristan';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port = 587;
                
                    //Recipients
                    $mail->setFrom('jhaycee122098@gmail.com', 'Administrator');
                    $mail->addAddress($email);
                
                    //Content
                    $mail->isHTML(true);
                    $mail->Subject = 'Forgot Password';
                    $mail->Body = '
                    Your password is : '.$generated_password.'<br/>
                    Please login to: <a href="http://localhost/warehouse-management-system/index.php">Warehouse Management System</a>';

                    $mail->send();
                    ?>
                        <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            Password Sent to your email
                        </div>
                    <?php
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            }
        } else {
            ?>
                <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    Username not exist
                </div>
            <?php
        }
    } 
?>