<?php include './includes/title.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Seven Deadly sins<?php if(isset($title)) { echo "&#8212;{$title}"; } ?></title>
    <link href="styles/journey.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
    <h1>Sins </h1>
</header>
<div id="wrapper">
    <?php require './includes/menu.php'; ?>
    <main>
        <h2>Seven Deadly Sins</h2>
      <p id="picCount">Displaying 1 to 7</p>
        <div id="gallery">
            <table id="thumbs">
                <tr>
					<!--This row needs to be repeated-->
                    <td><a href="gallery.php"><img src="images/thumbs/pic1.jpg" alt="" width="200" height="200"></a></td>
                </tr>
				<!-- Navigation link needs to go here -->
            </table>
            <figure id="main_image">
                <img src="images/thumbs/pic.png" alt="" width="200" height="200">
                <figcaption>Изображение семи грехов в книге Иоанна Бузаеуса</figcaption>
            </figure>
        </div>
    </main>
    <?php include './includes/footer.php'; ?>
</div>
</body>
</html>