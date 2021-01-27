<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
			width:33%;
			background-color:lightgrey;

        }
		td{
			padding:1rem;
		}
		table{
			margin:auto;
		}
		input{
			text-align:right;
		}
		p{
			text-align:right;
			color:red;
			font-weight:bold;
		}
		.inp-sub{
			height:70px;
			background-color:blue;
		}
    </style>
</head>

<body>
    <form method="post">
        <table>
            <tr>
                <th colspan="4">Simple Calculator unsig PHP</th>
            </tr>
            <tr>
                <td>First Number:</td>
                <td><input type="text" name="num1" value="0"></td>
                <td rowspan="2"><input class="inp-sub" type="submit" name="submit" value="calculate"></td>
            </tr>
            <tr>
                <td>Second Number:</td>
                <td><input type="text" name="num2" value="0"></td>
            </tr>
    </form>





    <?php
    // php code here
     if(isset($_POST['submit'])) // check if the input submit is filled or not
     {
         $a = $_POST['num1'];
         $b = $_POST['num2'];


         if($a == 0 && $b == 0){
            echo "<script type='text/javascript'>
            alert('Enter any Number ?');
        
            </script>";
         }

         if(is_numeric($a) and is_numeric($b)){
             echo "<tr><td>Addition:</td><td><p>".($a + $b). "</p></td>";
             echo "<tr><td>Subtraction:</td><td><p>".($a - $b). "</p></td>";
             echo "<tr><td>Multipication:</td><td><p>".($a * $b). "</p></td>";
             echo "<tr><td>Division:</td><td><p>".($a / $b). "</p></td>";
             echo "</table>";
         }
         else{
            echo "<script type='text/javascript'>
            alert('Enter the Valid Number');
        
            </script>";
         }


     }



    ?>

</body>

</html>