<?php

$_timeset = ["morgen", "middag", "avond", "nacht"];
$_tijd = date("H");
$_second = date("i");

if($_tijd == 06 && $_tijd < 12){
    $_moment = $_timeset[0];
} else if($_tijd == 12 && $_tijd < 18){
    $_moment = $_timeset[1];
} else if($_tijd == 18 && $_tijd < 00){
    $_moment = $_timeset[2];
} else if($_tijd == 00 && $_tijd < 06){
    $_moment = $_timeset[3];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img id="achtergrond" src="<?php echo $_moment; ?>.png">
    <p id="moment">Goede <?php echo $_moment; ?>!</p>
    <p id="tijd">Het is nu <?php echo $_tijd.":".$_second?></p>
</body>
</html>