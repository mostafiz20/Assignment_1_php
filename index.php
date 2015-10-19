<?php

if (isset($_POST['convertbutton']))
    {
    echo "POUND: ".$kilograms=$_POST['kilograms']*2.20462."°p";
}
if (isset($_POST['convertbutton11']))
    {
    echo "Kilograms: ".$pound=$_POST['pound']/2.20462."°kg";
}
 if (isset($_POST['convertbutton1']))
    {
    echo $fahrenheit=$_POST['fahrenheit']*0.556."°C";
}
 if (isset($_POST['convertbutton111']))
    {
    echo $celsius=$_POST['celsius']/0.556."°F";
}
 if (isset($_POST['convertbutton3']))
    {
    echo $centimeter=$_POST['centimeter']*0.39."In";
}
 if (isset($_POST['convertbutton33']))
    {
    echo $inch=$_POST['inch']/0.39."C";
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Assignment-1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="project.css">
    </head>
    <body>
        <h2>KG to Pound</h2>
        <div class="new">
            <form action="index.php" method="POST" >
            <input name="kilograms" type="text" placeholder="kilograms">
            <input name="convertbutton" type="submit" value="Convert">
            </form>
        </div>
        <h2>Pounds to KG</h2>
        <div class="new">
            <form action="index.php" method="POST" >
            <input name="pound" type="text" placeholder="pound">
            <input name="convertbutton11" type="submit" value="Convert">
            </form>
        </div>
        <h2>Fahrenheit to Celsius</h2>
        <div class="new">
            <form action="index.php" method="POST" >
            <input name="fahrenheit" type="text" placeholder="fahrenheit">
            <input name="convertbutton1" type="submit" value="Convert">
            </form>
        </div>
        <h2>Celsius to Fahrenheit</h2>
        <div class="new">
            <form action="index.php" method="POST" >
            <input name="celsius" type="text" placeholder="Celsius">
            <input name="convertbutton111" type="submit" value="Convert">
            </form>
        </div>
        <h2>Centimeter to Inch,</h2>
        <div class="new">
            <form action="index.php" method="POST" >
            <input name="centimeter" type="text" placeholder="Centimeter">
            <input name="convertbutton3" type="submit" value="Convert">
            </form>
        </div>
        <h2>Inch to Centimeter</h2>
        <div class="new">
            <form action="index.php" method="POST" >
            <input name="inch" type="text" placeholder="inch">
            <input name="convertbutton33" type="submit" value="Convert">
            </form>
        </div>
        
    </body>
</html>
