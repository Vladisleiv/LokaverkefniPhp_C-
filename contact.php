<?php include './includes/title.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Deadly Sins<?php if(isset($title)) { echo "&#8212;{$title}"; } ?></title>
    <link href="styles/journey.css" rel="stylesheet" type="text/css">
</head>

<body>
<header>
    <h1>Deadly Sins </h1>
</header>
<div id="wrapper">
    <?php require './includes/menu.php'; ?>
    <main>
        <h2>Contact Us  </h2>
      <p>Fore more information use GOOGLE</p>
        <form method="post" action="">
            <p>
                <label for="name">Name:</label>
                <input name="name" id="name" type="text">
            </p>
            <p>
                <label for="email">Email:</label>
                <input name="email" id="email" type="text">
            </p>
            <p>
                <label for="comments">Comments:</label>
                <textarea name="comments" id="comments"></textarea>
            </p>
            <p>
                <input name="send" type="submit" value="Send message">
            </p>
        </form>
    </main>
    <?php include './includes/footer.php'; ?>
</div>
</body>
</html>
