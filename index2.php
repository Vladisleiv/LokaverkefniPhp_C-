<?php include './includes/title.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Landspitalinn Hrigbraut<?php if(isset($title)) { echo "&#8212;{$title}"; } ?></title>
    <link href="styles/journey.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
    <h1>LSH </h1>
</header>
<div id="wrapper">
    <?php require './includes/menu.php'; ?>
    <main>
        <h2>Landspitalinn Hringbraut</h2>
     

      <h1>Hérna þu get bæta i gagnagrun.</h1>
<form action="input.php" method="POST">
    Nafn:<br>
    <input type="text" name="Nafn">
    <br><br/>
    Lastname:<br>
    <input type="text" name="Fornafn">
    <br><br/>
    Kennitala:<br>
    <input type="text" name="Kennitala">
    <br><br>
    <input type="submit" name="Submit">
    
</form>   
    
        </div>
            <?php
        include "connection.php";
        include "query.php";

        ?>

</body>
</html>