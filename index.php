<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>It's birds!</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<table>
    <th>ID gatunku</th><th>Nazwa zwyczajowa</th><th>Nazwa łacińska</th>
<?php
    $connection = new mysqli("localhost","root","","ptaki");
    $raw_result = mysqli_query($connection, "SELECT * FROM `gatunki` ORDER BY RAND() LIMIT 15;");
    while($result = mysqli_fetch_array($raw_result)){
        echo "<tr><td>".$result['ID_gatunku']."</td><td>".$result['nazwa_zwyczajowa']."</td><td>".$result['nazwa_lacinska']."</td></tr>";
    }
?>
</table>
</body>
</html>