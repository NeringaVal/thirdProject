<?php
print_r($_POST);
$rnd = rand(3, 10);
$letter = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
if(isset($_POST['submit_form'])){
    $backgroundColorPage="white";

  
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
        label {
            color: azure;
        }        
        </style>
</head>
<body>
    <h1>Užduotis 7.09 </h1>
    
    <form action="" method="post">
        <?php for ($i=0; $i < $rnd; $i++) { 
            ?>
            
            <label for="<?php $i?>"><?php echo $letter[$i] ?></label>
            <input type="checkbox" name="varneles[]" id="<?php $i?>">
        <?php } ?>
        <button type="submit" name="submit_form">confirm</button>
    </form>
</body>
</html>