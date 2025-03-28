<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel  form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="fgs.jpg" alt="fathegrah sahib">
    <div class="container">
        <h1>welcome to fathegrah sahib</h1>
        <h3>Enter your details and submit this form</h3>
        <p> thank you for sumbit</p>
        <form action="index.php" method="post">
            <input type="text" nane="name" id="name"placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" nane="gender" id="gender"placeholder="Enter your gender">
            <input type="email" nane="email" id="email"placeholder="Enter your email">
            <input type="phone" nane="phone" id="phone"placeholder="Enter your phone">
            <textarea name="desc" id="desc"cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn"> submit </button>
</form>


<?php
$server ="localhost";
$username = "root";
$password =" ";

$con=mysqli_connect($server,$username,$password);
if(!con)
{
    die("connection to this database failed due to".mysqli_connect());
}
?>
</body>
</html>