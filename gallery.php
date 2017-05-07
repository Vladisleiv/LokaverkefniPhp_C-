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
      <p id="picCount">Displaying 1 to 7</p>
        <div id="gallery">
            <table id="thumbs">
                <tr>
					<!--This row needs to be repeated-->
                    <td><a href="gallery.php"><img src="images/thumbs/all1.jpg" alt="" width="200" height="200"></a></td>
                </tr>
				<!-- Navigation link needs to go here -->
            </table>
            <figure id="main_image">
                <img src="images/thumbs/all2.jpg" alt="" width="200" height="200">
                <figcaption>LSH</figcaption>
            </figure>
        </div>
    </main>
    <?php include './includes/footer.php'; ?>

            <?php
        include "conn.php";
        include "query3.php";

        ?>

<h1>Hérna Koma Myndir Með Database lausn</h1>
<form action="input3.php" method="POST">
    Nafn:<br>
    <input type="text" name="myndheiti">
    <br><br/>
    Slóð:<br>
    <input type="text" name="myndavefslod">
    <br><br>
    <input type="submit" name="Submit">
</form>

<?php

            foreach ($mynd as $entry) {
                # code...
                echo '<p>' . $entry[0] . '<br> <img src="' . $entry[1] . '" style="width:304px"';
            }

            print_r($mynd)

            ?>

</div>
</body>
</html>