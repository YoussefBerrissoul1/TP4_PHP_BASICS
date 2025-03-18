<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
    <style>
        body{
            display: flex;
            align-items:center;
            justify-content:center;
            flex-direction: column; 
        }
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color:whitesmoke;
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
        button{
            border-radius: 5px;
            border-color:black;
            color:white;
            background-color:red;
        }
        #btn {
            border-radius: 5px;
            border-color: blueviolet;
            color:white;
            background-color:blueviolet;
            margin:9px;
            padding:9px;
            font-size: 12px;
        }
    </style>
</head>
<body>

<?php
    echo "<table id='table'>";
    echo "<tr>";
        echo "<th> Colonne1 </th>";
    echo "</tr>";
    for ($i=1 ; $i< 6 ; $i++){
        echo "<tr>";
        echo "<td> Element $i <button>X</button> </td>";
        echo "</tr>";
    }
    echo "</table> <br>";
?>
<button id="btn">Cacher</button>


</body>
<script>
        let table = document.getElementById("table");
        let btn = document.getElementById("btn");

        let toggleBtn = () => {
            let valBtn = btn.innerText;
            if (valBtn === "Cacher") {
                table.style.display = "none";
                btn.innerText = "Afficher";
            } else {
                table.style.display = "";
                btn.innerText = "Cacher";
            }
        };

        btn.addEventListener("click", toggleBtn);
    </script>
</html>
