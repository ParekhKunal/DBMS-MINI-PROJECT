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
    <h5 ><a href="admindash.php" style="float: left; margin-left:20px; color:aliceblue;">BackToDashboard</a></h5>
    <h5 ><a href="logout.php" style="float: right; margin-right:20px; color:aliceblue;">LogOut</a></h5>
    </div>
    <h1 align='center' style="">Welcome To Admin Dashbord</h1>
</div>

<form action="marks.php" method="POST" enctype="multipart/form-data">
    <table border="0px solid" style="margin-left: auto; margin-right:auto; margin-top:30px; font-weight:bold;border-spacing: 0 15px;">
        <th colspan="2" style="text-align: center;background-color:grey; width: 140px; height: 50px;">Fill The Details Of Student</th>
        
        <tr>
            <td>Rollno.</td><td><input type="number" name="rolln" placeholder="Enter Rollno" required></td>
        </tr>
        <tr>
            <td>SUB1</td><td><input type="number" name="sub1" placeholder="Enter Marks of SUB1" required></td>
        </tr>
        <tr>
            <td>SUB2</td><td><input type="number" name="sub2" placeholder="Enter Marks of SUB2" required></td>
        </tr>
        <tr>
            <td>SUB3</td><td><input type="number" name="sub3" placeholder="Enter Marks of SUB3" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" style="background-color: red; border-radius: 15px; width: 140px; height: 50px;"></td>
        </tr>
    </table>
    
</form>
</body>
</html>


<?php

if(isset($_POST['submit'])){ //if we'll not give this,it'will submit from with zero values.

    include('../dbcon.php');

    $rolln = $_POST['rolln'];
    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];

    $qry = "INSERT INTO `marks`(`rollno`, `sub1`, `sub2`, `sub3`) VALUES ('$rolln','$sub1','$sub2','$sub3')";
    $run = mysqli_query($con,$qry);

    if($run==true){
        ?>  <script>
            alert('Data inserted Successfully :)'); 
            </script>
        <?php
    }

}

?>
