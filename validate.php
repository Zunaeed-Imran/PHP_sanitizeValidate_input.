<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>vadidation</title>
</head>
<body>
  <form action="validate.php" method="post">
    username:</br>
    <input type="text" name="username"></br>
    <input type="submit" name="login" value="log in">

  </form>
</body>
</html>

<?php

  if(isset($_POST["login"])){
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    echo "Hello {$username}";
  }
?>


<!-- <script>alert("Virus");</script>> -->
<!-- if user input like this code it will no problem -->