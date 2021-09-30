<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profilepage</title>
    <link rel="stylesheet" href="css/profilestyle.css">
</head>
<body>
    <p style=" font-size:32px; color:blue; float:right;padding-right: 30px;">Hello Lucifer001</p>
    <div>
        <center><h1>Profile Information</h1>
        <table>
            <tr>
                <td>Name: </td>
                <td><?php echo "$fname"."$lname";?></td>
            </tr>
            <tr>
                <td>Username: </td>
                <td><?php echo "$username";?></td>
            </tr>
            <tr>
                <td>email: </td>
                <td><?php echo "$email";?></td>
            </tr>
            <tr>
                <td>Gender: </td>
                <td><?php echo "$gender";?></td>
            </tr>
            <tr>
                <td>Date of Birth: </td>
                <td><?php echo "$dob";?></td>
            </tr>
            <tr>
                <td>Nationality: </td>
                <td><?php echo "$nationality";?></td>
            </tr>
                <td>Mob. Number </td>
                <td><?php echo "$mobNumber";?></td>
            </tr>
                <td>Address: </td>
                <td><?php echo "$address";?></td>
            </tr>
        </table>
        <p style="margin-top: 35px;"><a href="update_profile.php" target="_self">Update Information</a></p></center>
    
</body>
</html>
