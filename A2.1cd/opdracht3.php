<?php
$p= "";
for ($k = 10; $k < 100; $k+=10) {
if ($k == 90){
    $p .= "$k";
}
else{
    $p .="$k, ";

}

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Getallen tonen t/m 90</h1>
<hr>
<h2><?= $p ?>
    
</body>
</html>