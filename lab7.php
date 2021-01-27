<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        .demo{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50% , -50%);
            font-size: 3rem;
            color: #111;
        }
    </style>
</head>
<body>
    <p class="demo"><?php echo date("h : i: sA") ?></p>
</body>
</html>