<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-color: #111;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        display: flex;
        padding: 1rem;
    }
    .container > div {
        box-shadow: 0 0 10px 5px blue;
        padding: 1.5rem;
        text-align: center;
    }

    
</style>

<body>
    <div class="container">
        <?php
        $a = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));
        $b = array(array(7, 8, 9), array(4, 5, 6), array(1, 2, 3));

        $m = count($a);
        $n = count($a[2]);

        $p = count($b);
        $q = count($b[2]);
        // first matrix
        echo "<div class='first'>";
        echo "MATRIX 1" . "<br>";

        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                echo "   " . $a[$i][$j];
            }
            echo "<br>";
        }
        echo "</div>";
        // second Matrix
        echo "<div class='second'>";
        echo "TMATRIX 2:" . "<br>";

        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                echo "   " . $b[$i][$j];
            }
            echo "<br>";
        }
        echo "</div>";
        // transpose div
        echo "<div class='transpose'>";
        echo "MATRIX 1 TRANSPOSE" . "<br>";
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                echo "   " . $a[$j][$i];
            }
            echo "<br>";
        }
        echo "</div>";
        // addition div
        echo "<div class='addition'>";
        if (($m == $p) and ($n == $q)) {
            echo "ADDITION OF MATRIX" . "<br>";
            for ($i = 0; $i < $m; $i++) {
                for ($j = 0; $j < $n; $j++) {
                    echo " " . $a[$i][$j] + $b[$i][$j];
                    echo " ";
                }
                echo "<br>";
            }
        }
        echo "</div>";

        // multipication div
        echo "<div class='second'>";

        if ($n == $p) {
            echo "MULTIPICATION OF MATRIX" . "<br>";
            $result = array();


            for ($i = 0; $i < $m; $i++) {
                for ($j = 0; $j < $n; $j++) {
                    $result[$i][$j] = 0;

                    for ($k = 0; $k < $n; $k++) {
                        $result[$i][$j] += $a[$i][$k] * $b[$k][$j];
                    }
                }
            }
            for ($i = 0; $i < $m; $i++) {
                for ($j = 0; $j < $n; $j++) {

                    echo "  " . $result[$i][$j];
                }
                echo "<br>";
            }
        }
        echo "</div>";

        ?>
    </div>

</body>

</html>