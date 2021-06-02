<?php
//Устанавливаем доступы к базе данных:
$servername = "localhost";
$database = "mydb";
$username = "root";
$password = "123456";

$conn = mysqli_connect($servername,$username, $password,$database);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
//mysqli_close($conn);
//Соединяемся с базой данных используя наши доступы:
// Проверяем соединение
?>