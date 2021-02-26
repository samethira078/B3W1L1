<?php
    echo "<H1> A </H1>";
    $_randomNum = mt_rand(10,99);
    $_randomNum2 = mt_rand(10,99);

    echo $_randomNum * $_randomNum2."<br>";
    echo $_randomNum + $_randomNum2."<br>";
    echo $_randomNum - $_randomNum2."<br>";
    echo $_randomNum / $_randomNum2."<br>";

    echo "<H1> B </H1>";

    $_arrayNum = [3,5,8,12];

    foreach($_arrayNum as $_getal){
        echo "<H2> Tafel van: ".$_getal."</H2>";
        for($i=1; $i < 11; $i++){
            echo $_getal * $i."<br>";
        }
    }

