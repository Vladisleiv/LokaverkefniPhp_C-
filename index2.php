<?php include './includes/title.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>LSH<?php if(isset($title)) { echo "&#8212;{$title}"; } ?></title>
    <link href="styles/journey.css" rel="stylesheet" type="text/css">
</head>

<body>
<header>
<?php require './includes/menu.php'; ?>
    <h1>Landspitalin Hringbraut!</h1>
</header>
<div id="wrapper">
    

    <?php
        include "connection.php";
        include "query.php";

        ?>

<h1>Hérna Koma Nafn, Fornafn og Kennitala til Database.</h1>
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
    <?php include './includes/footer.php'; ?>
</div>
</body>
</html>


	