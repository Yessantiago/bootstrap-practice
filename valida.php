<?php
include('config.php');
$username = $_POST['user'];
$password = $_POST['pass'];

$sql = "select * from users where nickname = '$username' and password = '$password'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);

if ($count == 1) {
    echo "<h1><center> Login exitoso </h1></center>";
} else {
    echo "<h1><center> Error o usuario incorrecto </h1></center>";
}
?>
<!-- fin del php -->
