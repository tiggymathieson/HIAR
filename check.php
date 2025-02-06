<?php

$input = $_POST["password"];
session_start();
if($input == "tiggysucks"){
    header("Location: hinanorules.html");
    exit();
}
else{
    $_SESSION["error"] = "ERROR : INCORRECT PASSWORD";
    header("location: password.html");
    exit();
}
?>
