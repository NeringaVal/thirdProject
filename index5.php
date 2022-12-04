<?php
print_r($_GET);
print_r($_POST);

if($_SERVER['REQUEST_METHOD'] == "POST")
    {
    $backgroundColorPage="yellow";

  
}
if($_SERVER['REQUEST_METHOD'] == "GET")
{
    $backgroundColorPage="green";
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
    <h1>Užduotis 7.06 </h1>
    <form action="" method="get">
        <button type="submit">get color</button>
    </form>
    <form action="" method="post">
        <button type="submit">post color</button>
    </form>
</body>
</html>