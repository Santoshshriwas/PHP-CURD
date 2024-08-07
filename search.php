<?php
  if(isset($_POST["submit"]))
  {
    $empno=$_POST["empno"];
  }
?>


<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<?php
require "include/haeder.php"
?>
     <h1 class="hading">This is Search Page</h1>
     <!-- <div class="container"> -->
     <form method="post" action="search.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Enter RollNo</label>
    <input type="text" class="form-control" name="empno" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
 
  <button type="submit" class="btn btn-primary " name="submit">Submit</button>
</form>
<hr>
<table class="table">
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
   $con = new mysqli("localhost","root","","cybrom");

   $qry="SELECT * FROM `employee` where empno=$empno";

   $result=$con->query($qry);
   while($row=$result->fetch_assoc()){
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
   

<!-- </div> -->










     <?php
require "include/Footer.php"
?>
</body>
</html> 



