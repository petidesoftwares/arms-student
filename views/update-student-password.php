<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../student-css/student-base-style.css">
    <link rel="stylesheet" href="../student-css/banner.css">
    <link rel="stylesheet" href="../student-css/student.css">
    <script src="../student-jscripts/jquery-3.5.1.min.js"></script>
    <script src="../student-jscripts/students.js"></script>
    <title>Password Update</title>
</head>
<body>
    <div class = "row">
        <div class="col-12" id = "page-header"><img src="../images/ndu_bg_logo.png" alt="logo"> <p>NIGER DELTA UNIVERSITY <br><span>Wilberforce Island</span</p></div>
    </div>
    <!-- <div class ="col-12" id="index-bg-spacer"></div> -->
    <div class="row">
        <div class="col-12" id = "banner">
            <div class="col-12" id="login-form-pane">
                <div class = "col-3"></div>
                <fieldset class = "col-6 double-input-form"> 
                    <legend>Update Password Form</legend>
                    <input type="text" name="mat_num" id="mat-num" placeholder = "Enter Matric Number"><br>
                    <input type="password" name="student_login_password" id="student-login-password" placeholder = "Enter Password"><br>
                    <button class = "double-input-btn" id = "login-btn" onclick = "studentLogin();">Login</button>
                </fieldset>
                <div class = "col-3"></div>
            </div>
        </div>
        
    </div>
</body>
</html>