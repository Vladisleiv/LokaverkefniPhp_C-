<?php ob_start();
try {
    include './includes/title.php';
    include './includes/random_image.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Landspitalinn Hringbraut.<?php if(isset($title)) { echo "&#8212;{$title}"; } ?></title>
    <link href="styles/journey.css" rel="stylesheet" type="text/css">
    <?php if (isset($imageSize)) { ?>
    <style>
        figcaption {
            width: <?= $imageSize[0]; ?>px;
        }
    </style>
    <?php } ?>
</head>

<body>
<header>
    <h1>Landspitalinn Hringbraut</h1>
</header>
<div id="wrapper">
   <?php
   $file = './includes/menu.php';
   if (file_exists($file) && is_readable($file)) {
       require $file;
   } else {
       throw new Exception("$file can't be found");
   }
   ?>
    <main>
        <h2>Forstjórapistill: Hvað er Landspítali?</h2>
	  <p>Kæra samstarfsfólk!
     Í bókinni Sapiens eftir sagnfræðiprófessorinn Yuval Noah Harare er varpað fram þeirri hugmynd að straumhvörf hafi orðið þegar maðurinn náði færni á eiginleikanum til að búa til í huga sér sameiginlega mynd af afstæðum hlutum. Dæmi um slíka hugmynd eru peningar sem hafa ekki gildi í sjálfu sér en snúast um traust, þjóðríki sem snúast um afmarkað landsvæði með landamæri, trú sem snýst að hluta til um von og þjóð sem fjallar um hóp fólks með ákveðna menningu og eigin sögu. Eftir að maðurinn náði valdi á þessum eiginleika, að búa sér til sameiginlega afstæða mynd, gátu þúsundir, já jafnvel milljónir einstaklinga unnið að sama markmiði og náð ótrúlegum árangri.</p>
        <?php if (isset($imageSize)) { ?>
		<figure><img src="<?= $selectedImage; ?>" alt="Random image" <?= $imageSize[0]; ?>>
            <figcaption><?= $caption; ?></figcaption>
        </figure>
        <?php } ?>
        <p>Mér varð hugsað til þessarar kenningar í vikunni á frábærum fundum hér á Landspítala. Sá fyrri var árlegur vorfundur tvö hundruð stjórnenda spítalans. Annars vegar var skoðað hvað við á spítalanum getum gert til að bæta mönnun og gera vinnustaðinn meira aðlaðandi. Hins vegar byrjaði hópurinn að velta fyrir sér hlutverki Landspítala, í hverju það er fólgið, hverju við eigum að sinna í meiri mæli og hverju í minna mæli. Hinn fundurinn var Vísindi á vordögum, árleg uppskeruhátíð vísindafólks á Landspítala, sem haldinn var í gær. Þar veitti Vísindasjóður spítalans 68 milljónir króna í styrki til tuga frábærra vísindamanna á spítalanum.</p>
<p>Það sem mér fannst áberandi á báðum þessum samkomum var sá ótrúlegi sköpunarkraftur og eldmóður sem býr í starfsfólki þessa spítala. Kraftur sem næst í gegnum sameiginlega sýn á Landspítala sem hugmynd. </p>
        
    </main>
    <?php include './includes/footer.php'; ?>
</div>
</body>
</html>
<?php } catch (Exception $e) {
    ob_end_clean();
    header('Location: http://localhost/phpsols/error.php');
}
ob_end_flush();
?>
