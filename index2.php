<?php
print_r($_GET);

if(isset($_GET['color'])&&$_GET['color']==1){
    $backgroundColorPage="red";

  
}
else {
    $backgroundColorPage="black";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?php echo $backgroundColorPage; ?>;
            color: antiquewhite;
        }
        a {
            color: azure;
        }        
        </style>
</head>
<body>
    <h1>Užduotis 7.01 </h1>
    <a href="./index2.php">tas pats page</a>
    <a href="./index2.php?color=1">tas pats page su kintamuoju</a>
</body>
</html>