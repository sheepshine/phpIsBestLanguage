<?php
    if(!isset($_COOKIE["niubi"])){
        setcookie("niubi",date("y-m-d H:i:s"));
        echo "初次见面";
    }else{
        echo "上次访问的时间是：".$_COOKIE["niubi"]."<br>";
        setcookie("niubi",date("y-m-d H:i:s"));
        
        
        echo "本次次访问的时间是：".date("y-m-d H:i:s");
    }
    
    
    

?>