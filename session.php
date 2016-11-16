<?php
    session_start();
    if(!empty($_SESSION["niubi"])){
        $session=$_SESSION["niubi"];
    }else{
        $_SESSION["niubi"]="niubi";
    }
    echo $session;
    
?>