<?php


$login = !empty($_POST['login']) ? $_POST['login'] : '';
$password = !empty($_POST['password']) ? $_POST['password'] : '';



if($_SERVER["REQUEST_METHOD"]=="POST"){
        print_r($_POST);
        if (!empty($_POST["password"]) && !empty($_POST["email"])){
             
        }    
        else {
             echo "Поля name или email не заполнены!";
        }
}
else {
     echo "Метод передачи данных не является POST-запросом!";
}

?>
