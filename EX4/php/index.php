<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 4 </title>
    <style>
        body{
            display: flex;
            align-items:center;
            justify-content:center;
        }
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: solid 1px black;
            border-color: blueviolet;
            color:blueviolet;
            
        }
        td ,th {
            padding: 10px;
            text-align: center;
            border-radius: 5px;
        }
    </style>
</head>
<body>


<?php 
    $colSum=[0,0,0];
    $sumArray =0;
    echo "<table>";
    echo "<tr>";
        echo "<th>Colonne1</th>";
        echo "<th>Colonne2</th>";
        echo "<th>Colonne3</th>";
        echo "<th>Somme</th>";
        echo "</tr>";
        for ($i = 0; $i < 5; $i++) {
            $linesSum=0;
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
                $random = rand(1, 100);
                echo "<td>$random</td>";
                $linesSum+=$random;
                $colSum[$j]+=$random;

            }
            echo "<td><i>$linesSum</i></td>"; 
            echo "</tr>";
        }
        echo "<tr>";
        for ($j = 0; $j < 3; $j++) {
            echo "<td><i>$colSum[$j]</i></td>";
        }
        for ($k =0; $k < sizeof($colSum); $k++) {
            $sumArray+=$colSum[$k];
        }
        echo "<td><i>$sumArray</i></td>";

    echo "</table>";
?>
</body>
</html>