<!-- <!doctype html>
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

     <h1 class="hading">This is display   Page</h1>
     <table class>
          <tr>EmpNo</tr>
          <tr>Name</tr>
          <tr>Email</tr>
          <tr>Salary</tr>
        </table>
<?php 
    $con = new mysqli("localhost", "root","", "cybrom");

    $sql= "select * from employee ";
    $result = $con->query($sql);

    while($row= $result->fetch_assoc())
    {

      echo "<td>".$row["empno"]. "</td>";
      echo "<td>".$row["name"]. "</td>";
      echo "<td>".$row["email"]. "</td>";
      echo "<td>".$row["salary"]. "</td>";
    }
?>

    
        


        <?php
require "include/Footer.php"
?>
</body>
</html> 


 -->


 <!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
require "include/haeder.php"

?>

     <h1 class="hading">This is display   Page</h1>
     <div class="container">
     
     <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Rollno</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">Salary</th>
    </tr>
 </thead>
 <tbody>
<?php 
    $con = new mysqli("localhost", "root","", "cybrom");
    $sql= "select * from employee ";
    $result = $con->query($sql);
    while($row= $result->fetch_assoc())
    {
      echo "<tr>";
      echo "<td>".$row["empno"]. "</td>";
      echo "<td>".$row["name"]. "</td>";
      echo "<td>".$row["email"]. "</td>";
      echo "<td>".$row["salary"]. "</td>";
      echo "</tr>";
    }
?>
</tbody>
</table>
 </div>
        <?php
require "include/Footer.php"
?>
</body>
</html> 



