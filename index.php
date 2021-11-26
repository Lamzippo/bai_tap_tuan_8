<?php 
    include_once('./models/admin.php');
    include_once('./models/blog.php');
    include_once('./models/user.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
         $doituong = new User();
        
        
    ?>
<table>
    <tr>
        <td style="width:100px">ID</td>
        <td>Name</td>
        <td>Address</td>
        <td style="width:100px">Email</td>
        <td>Accound</td>
        <td>Password</td>
    </tr>
    <tr>
        <td style="width:100px"><?php  echo $doituong->lay_ID(); ?></td>
        <td style="width:100px"><?php  echo $doituong->name; ?></td>
        <td style="width:100px"><?php  echo $doituong->address; ?>.</td>
        <td style="width:100px"><?php  echo $doituong->lay_email(); ?></td>
        <td style="width:100px"><?php  echo $doituong->lay_account(); ?></td>
        <td style="width:100px"><?php  echo $doituong->lay_password(); ?></td>
    </tr>
</table>
    
</body>
</html>