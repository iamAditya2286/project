<!DOCTYPE html>
<html lang="en">
<?php
$var = $_SESSION["email"];
$sql = "select * from student where email = '$var';";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$fname = $row['fname'];
$lname = $row['lname'];
$gender = $row['gender'];
$email = $row['email'];
$dob = $row['dob'];
$address = $row['address'];
$mobNumber = $row['mobNumber'];
$username = $row['username'];
$nationality = $row['nationality'];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update_Profile</title>
    <link rel="stylesheet" href="update_profile_style.css">
</head>
<body>
        <div>
            <center><h3>Profile Information</h3>
            <form action="includes/updateprofile_inc.php" method="POST">
                <table>
                    <tr>
                        <td>First Name</td>
                        <td><input type="text" name="fname" value='<?php echo "$fname"?>'></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><input type="text" name="lname" value='<?php echo "$lname"?>'></td>
                    </tr>
                    <tr>
                        <td>User name</td>
                        <td><input type="text" name="username" value='<?php echo "$username"?>'></td>
                    </tr>
                    <tr>
                        <td>Mobile Number</td>
                        <td><input type="number" name="mob" value='<?php echo "$mobNumber"?>'></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" name="address" value='<?php echo "$address"?>'></td>
                    </tr>
                </table>
                <button type="submit" name="updatesubmit">Update</button>
            </form>
            </center>
        </div>
    
</body>
</html>