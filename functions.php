<?php
// $getPsw = $_GET["pswlenght"];
// $pswLenght = strlen(($getPsw));
// var_dump($pswLenght);
function randomPassword()
{
    $getPsw = $_GET["pswlenght"];
    $pswLenght = strlen(($getPsw));
    $letters = "abcdefghilmnopqrstuvwxyz";
    $capsLetters = "ABCDEFGHILMNOPQRSTUVWXYZ";
    $symbols = " ~!@#$%^&*=+/><";
    $numbers = "123456789";
    $totalSring = $letters . $capsLetters . $symbols . $numbers;
    for ($i = 0; $i < $pswLenght; $i++) {
        $n = rand(0, strlen($totalSring )- 1);
        $pass[] = $totalSring[$n];
    }
    
    return implode($pass);
}
// echo randomPassword();


// echo randomPassword2();
// echo randomPassword($pswLenght);
?>