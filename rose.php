<?php

echo $_SERVER['REQUEST_METHOD'];


if($_SERVER['REQUEST_METHOD'] == "GET")
{
    header("location: ./pink.php");
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
            background-color: rgb(209, 121, 121) ;
            color: antiquewhite;
        }
        a {
            color: azure;
        }        
        </style>
</head>
<body>
    <h1>Užduotis 7.08 ROSE </h1>
    
</body>
</html>