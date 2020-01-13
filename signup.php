<?php
$dbc = mysqli_connect('localhost','root','','lesson') OR DIE('Ошибка подключения к базе данных');
if(isset($_POST['submit'])){
  $username = mysqli_real_escape_string($dbc,trim($_POST['username']));
  $password1 = mysqli_real_escape_string($dbc,trim($_POST['password1']));
  $password2 = mysqli_real_escape_string($dbc,trim($_POST['password2']));
  if(!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2)){
    $query = "SELECT * FROM `signup` WHERE username = '$username'";
    $data = mysqli_query($dbc, $query);
    if(mysqli_num_rows($data) == 0){
      $query ="INSERT INTO `signup` (username, password) VALUES ('$username', SHA('$password2'))";
      mysqli_query($dbc,$query);
      echo 'Все готово,можете авторизоваться';
      mysqli_close($dbc);
      exit();
    }
    else{
      echo 'Логин уже существует';
    }
  }
}
include 'htmls/Registr.php';
?>
