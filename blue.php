<?php
print_r($_GET);
if(isset($_GET['var'])){
    header("location: ./red.php");
    die;

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
            background-color: blue;
            color: antiquewhite;
        }
        a {
            color: azure;
        }        
        </style>
</head>
<body>
    <h1>Užduotis 7.05 Blue</h1>
    <a href="?var">tas pats page</a>
    
</body>
</html>