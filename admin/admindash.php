<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../login.php');
    }

?>

<?php
include('header.php');
?>

<div class="admintitle">
    <div>
    <h5 ><a href="../index.php" style="float: left; margin-left:20px; color:white;">BackToHome</a></h5>
    <h5 ><a href="logout.php" style="float: right; margin-right:20px;color:white; ">LogOut</a></h5>
    </div>
    <h1 align='center' style="">Welcome To Admin Dashbord</h1>
</div>
<div align="center" style="margin-top:20px;">
<table border=" 0px solid black" style="background-color:grey; width:88%;border-spacing: 0 15px;">
    <tr>
        <td>1.</td><td><a href="addstudent.php">Insert new student</a></td>
    </tr>
    <tr>
        <td>2.</td><td><a href="updatestudent.php">Update student details</a></td>
    </tr>
    <tr>
        <td>3.</td><td><a href="marks.php">Marks Enter</a></td>
    </tr>
    <tr>
        <td>4.</td><td><a href="deletestudent.php">Delete student</a></td>
    </tr>
</table>
</div>
</body>
</html>