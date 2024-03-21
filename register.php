<?php
$username = filter_input(INPUT_POST, 'username');
$name = filter_input(INPUT_POST, 'name');
$password = filter_input(INPUT_POST, 'password');
$gender = filter_input(INPUT_POST, 'gender');
$email = filter_input(INPUT_POST, 'email');
$mode = filter_input(INPUT_POST, 'mode');
$number = filter_input(INPUT_POST, 'number');

$conn = new mysqli('localhost','root','','timenest');

if (mysqli_connect_error()){
  die('Connect Error (', mysqli_connect_errno() .')'
  , mysqli_connect_error());
}
else{
  $sql = "INSERT INTO register (username, password) values ('$username','$password')";
  if ($conn->query($sql)){
    echo "New record is inserted successfully!";
  }
  else{
    echo "Error: ". $sql ."<br>". $conn->error; 
  }
  $conn->close();
}
?>
