<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab6th</title>
</head>
<body>

<h2>Refresh Page to Count he number of views in the page</h2>
<?php 

session_start();

if(isset($_SESSION['views'])){
    $_SESSION['views'] = $_SESSION['views'] + 1;

}else{
    $_SESSION['views'] = 0;
}

echo "The number of Views in the page is " .$_SESSION['views'];

?>
    
</body>
</html>
