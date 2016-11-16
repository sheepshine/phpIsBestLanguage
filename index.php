
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            require("title.php");
            echo 'hello world<br>';
            echo PHP_OS.'<br>';

            define('HELLO11','牛逼');
            echo HELLO11."<br>";

            $A=1;
            $B=2;
            echo "it is $A<br>";

            function heheda(){
               global $c;
               $c=10;
            }

            heheda();

            
            //echo $c;

            function staticTest(){
                static $e=1;
                $f=1;
                $e=$e+1;
                echo $e."<br>",$f."<br>";
            }

            staticTest();
            staticTest();
            staticTest();

            echo "{$A}{$B}<br>";

            for($i=1;$i<=10;$i++){
                echo "$i 牛逼啊卧槽 <br>\n";
            }

            $links=array("111"=>"item 1","222"=>"item 2","333"=>"item 3");

            foreach($links as $item=>$name){
                echo "$item $name<br>";
            }

            echo str_ireplace("php","javascript","php is best language!<br>");

            echo date('Y-m-j');
        ?>
    </body>
</html>