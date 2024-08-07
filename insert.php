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

     <h1 class="hading">This is Insert Page</h1>
     <div class="center">
      <form method="post" action="save.php">
        <label for="">EmpNo :</label>
        <input type="text" name="empno" placeholder="Enter a Name"/>
        <label for="">Name :</label>
        <input type="text" name="name" placeholder="Enter a Name"/>
        <label for="">Email :</label>
        <input type="email" name="email" placeholder="Enter a email"/>
        <label for="">Fees :</label>
        <input type="text" name="salary" placeholder="Enter a Fees"/>
        <input type="submit" value="save">
      </form>
     </div>

     <?php
require "include/Footer.php"

?>
</body>
</html> 