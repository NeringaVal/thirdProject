<?php
print_r($_GET);

if(isset($_GET['color'])){
    $backgroundColorPage=$_GET['color'];

  
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
    <h1>Užduotis 7.02 </h1>
    <a href="./index3.php">tas pats page</a>
    
</body>
</html>