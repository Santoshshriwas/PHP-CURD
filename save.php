<?php
   $empno=$_POST["empno"];
   $name=$_POST["name"];
   $email=$_POST["email"];
   $salary=$_POST["salary"];

   $con = new mysqli("localhost", "root","", "cybrom");
   $sql= "insert into employee (empno , name, email,salary) values ('$empno','$name','$email','$salary')";

   $con->query($sql);
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
</head>
<body>
<?php
require "include/haeder.php"
?>

     <h1 class="hading">This is Data Save</h1>
     <?php
require "include/Footer.php"

?>
</html> 
