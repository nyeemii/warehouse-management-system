<?php
    session_start(); 
    include('server.php');

    $username = $_SESSION['username'];
    if (!isset($_SESSION['username'])) {
        header('location: ../index.php');
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
        header("location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS Stylesheet-->
    <link rel="stylesheet" href="./../CSS/registration.css">

    <!--Title Bar Icon-->
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type="image/x-icon">

    <!--Google Font CDN-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin Homepage</title>
</head>

<body>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="admin-homepage.php" style="color: #4B778D">Admin Homepage</a>
        <a href="../Product-registration/product-registration.php">Product Registration</a>
        <a href="../Admin-profile/admin-profile.php">Profile</a>
        <a href="../Admin-Gallery/admin-gallery.php">Gallery</a>
        <a href="../Admin-Inventory/admin-inventory.php">Inventory</a>
        <a href="../Admin-Sales-and-Purchase/sales-and-purchase.php">Sales and Purchase</a>
        <a href="../Admin-Search/admin-search.php">Search</a>
        <button class="dropdown-btn">Product Monitoring
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="../Admin-Incoming-Product/incoming-product.php">Incoming Product</a>
            <a href="../Admin-Outgoing-Product/outgoing-product.php">Outgoing Product</a>
            <a href="../Admin-Stock-Replenishment/stock-replenishment.php">Stock Replenishment</a>
        </div>
        <a href="../Admin-Daily-Attendance/daily-attendance.php">Daily Attendance</a>
        <button class="dropdown-btn">Report
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="../Admin-Report/Admin-audit-trail.php">Audit Trail</a>
            <a href="../Admin-Report/Admin-Sales-report.php">Sales Report</a>
            <a href="../Admin-Report/Admin-Purchase-Report.php">Purchase Report</a>
            <a href="../Admin-Report/Admin-Incoming-products-report.php">Incoming Products Report</a>
            <a href="../Admin-Report/Admin-Outgoing-products-report.php">Outgoing Products Report</a>
            <a href="../Admin-Report/Admin-Stock-replenishment-report.php">Stock Replenishment Report</a>
            <a href="../Admin-Report/Admin-Attendance-report.php">Attendance Report</a>
            <a href="../Admin-Report/Admin-Billing-report.php">Billing Report</a>
        </div>
        <button class="dropdown-btn">Maintenance
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="../Admin-Maintenance/admin-edit.php">Edit</a>
            <a href="../Admin-Maintenance/admin-backup-restore.php">Backup & Restore</a>
        </div>
        <a href="#">Help</a>
        <a href="admin-homepage.php?logout=<?php echo " $username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        <div id="main1" class="registration-container">
            <h1 class="registration-h1">Registration</h1>
            <form action="admin-homepage.php" method="POST">
                <div class="registration-grid">
                    <div class="grid-1">
                        <input type="hidden" name="uname" value=<?php echo $username;?> />
                        <label for="username">Username</label>
                        <input id="username" type="text" class="inputs" name="userName"
                            placeholder="Enter your username" pattern="[A-z0-9]{8,}"
                            title="Alphanumeric Characters Only!" autofocus required>
                        <label for="password">Password</label>
                        <input id="password" type="text" class="inputs" name="passWord"
                            placeholder="Auto generated password" disabled>

                        <label for="firstName">First Name</label>
                        <input id="firstName" type="text" class="inputs" name="firstName"
                            placeholder="Enter your first name" pattern="[A-z\s]{1,}" title="Only Accept Letters Only!"
                            required>
                        <label for="lastName">Last Name</label>
                        <input id="lastName" type="text" class="inputs" name="lastName"
                            placeholder="Enter your last name" pattern="[A-z\s]{1,}"
                            title="Only Accepts Characters Only!" required>

                        <label for="middleName">Middle Name</label>
                        <input id="middleName" type="text" class="inputs" name="middleName"
                            placeholder="Enter your middle name" pattern="[A-z\s]{1,}"
                            title="Only Accepts Characters Only!" required>

                        <label for="address">Address</label>
                        <input id="address" type="text" class="address" name="address" placeholder="Enter your address"
                            required>
                    </div>
                    <div class="grid-2">
                        <label for="birthDate">Birth Date</label>
                        <input id="birthDate" type="date" class="inputs" name="birthDate" required>

                        <label for="number">Contact Number</label>
                        <input id="number" type="text" class="inputs" name="contactnumber"
                            placeholder="Enter your contact number" required>
                        <label for="email">Email</label>
                        <input id="email" type="email" class="inputs" name="email" placeholder="Enter your email"
                            required>

                        <label for="loa">Level Of Access</label>
                        <select name="loa" class="inputs" id="loa">
                            <option value="Employee">Employee</option>
                            <option value="Branch">Branch</option>
                        </select>
                        <label for="store">Store</label>
                        <input id="store" type="text" class="inputs" name="store"
                            placeholder="Enter your store(optional)">
                    </div>
                    <label for="terms-and-condition">
                        <input id="terms-and-condition" type="checkbox">I have agree to <a href="#" class="terms"
                            id="terms">Terms
                            and Condition</a></label>
                </div>
                <br />
                <div class="button-div">
                    <input id="submit-btn" type="submit" class="submit-button" name="submit-button" value="Submit"
                        disabled>
                </div>
            </form>
            <div id="modal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Terms and Conditions for CGA Bed % Bath</h2>
                    <h3>Introduction</h3>
                    <p>These Website Standard Terms and Conditions written on this webpage shall manage your use of our
                        website, CGA Bed % Bath accessible at CGA Bed % Bath.</p>

                    <p>These Terms will be applied fully and affect to your use of this Website. By using this Website,
                        you
                        agreed to accept all terms and conditions written in here. You must not use this Website if you
                        disagree
                        with any of these Website Standard Terms and Conditions. These Terms and Conditions have been
                        generated
                        with the help of the Terms And Conditiions Sample and the Privacy Policy Generator.</p>

                    <p>Minors or people below 18 years old are not allowed to use this Website.</p>

                    <h3>Intellectual Property Rights</h3>
                    <p>Other than the content you own, under these Terms, CGA Bed % Bath and/or its licensors own all
                        the
                        intellectual property rights and materials contained in this Website.</p>

                    <p>You are granted limited license only for purposes of viewing the material contained on this
                        Website.</p>

                    <h3>Restrictions</h3>
                    <p>You are specifically restricted from all of the following:</p>

                    <p>Publishing any Website material in any other media;</p>
                    <p>Selling, sublicensing and/or otherwise commercializing any Website material;</p>
                    <p>Publicly performing and/or showing any Website material;</p>
                    <p>Using this Website in any way that is or may be damaging to this Website;</p>
                    <p>Using this Website in any way that impacts user access to this Website;</p>
                    <p>Using this Website contrary to applicable laws and regulations, or in any way may cause harm to
                        the Website, or to any person or business entity;</p>
                    <p>Engaging in any data mining, data harvesting, data extracting or any other similar activity in
                        relation to this Website;</p>
                    <p>Using this Website to engage in any advertising or marketing.</p>
                    <p>Certain areas of this Website are restricted from being access by you and CGA Bed % Bath may
                        further
                        restrict access by you to any areas of this Website, at any time, in absolute discretion. Any
                        user ID
                        and password you may have for this Website are confidential and you must maintain
                        confidentiality as
                        well.</p>

                    <h3>Your Content</h3>
                    <p>In these Website Standard Terms and Conditions, "Your Content" shall mean any audio, video text,
                        images
                        or other material you choose to display on this Website. By displaying Your Content, you grant
                        CGA Bed %
                        Bath a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt,
                        publish,
                        translate and distribute it in any and all media.</p>

                    <p>Your Content must be your own and must not be invading any third-party’s rights. CGA Bed % Bath
                        reserves the right to remove any of Your Content from this Website at any time without notice.
                    </p>

                    <h3>Your Privacy</h3>
                    <h4>Please read Privacy Policy.</h4>

                    <h4>No warranties</h4>
                    <p>This Website is provided "as is," with all faults, and CGA Bed % Bath express no representations
                        or
                        warranties, of any kind related to this Website or the materials contained on this Website.
                        Also,
                        nothing contained on this Website shall be interpreted as advising you.</p>

                    <h4>Limitation of liability</h4>
                    <p>In no event shall CGA Bed % Bath, nor any of its officers, directors and employees, shall be held
                        liable
                        for anything arising out of or in any way connected with your use of this Website whether such
                        liability
                        is under contract. CGA Bed % Bath, including its officers, directors and employees shall not be
                        held
                        liable for any indirect, consequential or special liability arising out of or in any way related
                        to your
                        use of this Website.</p>

                    <h4>Indemnification</h4>
                    <p>You hereby indemnify to the fullest extent CGA Bed % Bath from and against any and/or all
                        liabilities,
                        costs, demands, causes of action, damages and expenses arising in any way related to your breach
                        of any
                        of the provisions of these Terms.</p>

                    <h4>Severability</h4>
                    <p>If any provision of these Terms is found to be invalid under any applicable law, such provisions
                        shall
                        be deleted without affecting the remaining provisions herein.</p>

                    <h4>Variation of Terms</h4>
                    <p>CGA Bed % Bath is permitted to revise these Terms at any time as it sees fit, and by using this
                        Website
                        you are expected to review these Terms on a regular basis.</p>

                    <h4>Assignment</h4>
                    <p>The CGA Bed % Bath is allowed to assign, transfer, and subcontract its rights and/or obligations
                        under
                        these Terms without any notification. However, you are not allowed to assign, transfer, or
                        subcontract
                        any of your rights and/or obligations under these Terms.</p>

                    <h4>Entire Agreement</h4>
                    <p>These Terms constitute the entire agreement between CGA Bed % Bath and you in relation to your
                        use of
                        this Website, and supersede all prior agreements and understandings.</p>

                    <h4>Governing Law & Jurisdiction</h4>
                    <p>These Terms will be governed by and interpreted in accordance with the laws of the State of ph,
                        and you
                        submit to the non-exclusive jurisdiction of the state and federal courts located in ph for the
                        resolution of any disputes.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="./index.js"></script>
</body>

</html>