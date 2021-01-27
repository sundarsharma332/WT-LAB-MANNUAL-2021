<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$states = "Mississippi Alabama Texas Massachusetts Kansas";
$states1 = explode(' ' , $states);
echo"The original Array is: " ;
foreach($states1 as $i => $value){
    echo"<br>states[$i]" .$value;
}
$a = [];

foreach($states1 as $state){
    if(preg_match('/xas$/', $state)){
        $a[0]= $state;

    }
}
foreach($states1 as $state){
    if(preg_match('/^k.*s$/i', $state)){
        $a[1]= $state;

    }
}
foreach($states1 as $state){
    if(preg_match('/^M.*s$/', $state)){
        $a[2]= $state;

    }
}
foreach($states1 as $state){
    if(preg_match('/a$/', $state)){
        $a[3]= $state;

    }
}


echo"<br><br>The Resultant Array is: ";
foreach($a as $state => $value){
    echo"<br>states[$state]:" .$value;

}





?>
    
</body>
</html>