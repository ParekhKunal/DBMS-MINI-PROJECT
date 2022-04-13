<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
</head>
<body>
    <h3 align="right" style="margin-right: 20px;text-decoration:none"><a href="login.php" >Admin Login</a></h3>
    <h1 align="center">Welcome To DBMS Mini Project</h1>
    <form method="POST" action="index.php">
    <table style="width: 30%; font-weight: bold;" align="center" border="1px">
        <tr style="height: 50px;">
            <td colspan="2" align="center" style="background-color: grey;">Student Information</td>
        </tr>
        <tr>
            <td>Choose Standerd</td>
            <td>
                <select name="std">
                    <option value="1">1st</option>
                    <option value="2">2nd</option>
                    <option value="3">3rd</option>
                    <option value="4">4th</option>
                    <option value="5">5th</option>
                    <option value="6">6th</option>
                    <option value="6">7th</option>
                    <option value="6">8th</option>
                    <option value="6">9th</option>
                    <option value="6">10th</option>
                    <option value="6">11th</option>
                    <option value="6">12th</option>
                    
                </select>
            </td>
        </tr>
        <tr>
            <td>Enter Rollno.</td>
            <td>
                <input type="text" name="rollno" required>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center" ><input type="submit" name="submit" value="Show Info" style="background-color: grey; border-radius: 12px;"></td>
        </tr>
    </table>
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){

    $stdd= $_POST['std'];
    $roln= $_POST['rollno'];

    include('dbcon.php');
    include('function.php');

    showdetails($stdd,$roln);
}

?>