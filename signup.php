<?php
session_start();

include("db.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $Gender = $_POST['gender'];
    $num = $_POST['number'];
    $address = $_POST['add'];
    $gmail = $_POST['mail'];
    $password = $_POST['pass'];

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail)){
        $query = "insert into rana (fname, lname, gender, cnum, address, email, pass) value ('$firstname', '$lastname', '$Gender', '$num', '$address', '$gmail', '$password')";
        mysqli_query($con, $query);

        echo "<script type='text/javascript'>alert('Successfully Register')</script>";
    
    }
    else{
        echo "<script type='text/javascript'>alert('Please Enter Some Valid Information')</script>";
    }
}
?>




<html>
    <head>
        <title>Abc</title>
        <link rel="stylesheet" href="Style.css">
    </head>

    <body>
        <div class="signup">
            <h1>Sign Up</h1>
            <h4>It is free and only take a minute</h4>
            <form method="post">
                <label>First Name</label>
                <input type="text" name="fname" required>
                <label>Last Name</label>
                <input type="text" name="lname" required>
                <label>Gender</label>
                <input type="text" name="gender" required>
                <label>Contact Address</label>
                <input type="tel" name="number" required>
                <label>Address</label>
                <input type="text" name="add" required>
                <label>Email</label>
                <input type="email" name="mail" required>
                <label>Password</label>
                <input type="password" name="pass" required>
                <input type="Submit" name="" value="Submit">
            </form>
            <p>Already Have Account? <a href="login.php">Login Here</a></p>
        </div>
    </body>
</html>