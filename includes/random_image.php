<?php
$images = [
    ['file'    => 'Acedia',
     'caption' => 'Acedia (уныние)'],
    ['file'    => 'Avaritia',
     'caption' => 'Avaritia (алчность)'],
    ['file'    => 'Gula',
     'caption' => 'Gula (чревоугодие)'],
    ['file'    => 'Invidia',
     'caption' => 'Invidia (зависть)'],
    ['file'    => 'Ira',
     'caption' => 'Ira (гнев)'],
    ['file'    => 'Luxuria',
     'caption' => 'Luxuria (похоть, блуд)'],
    ['file'    => 'Superbia',
     'caption' => 'Superbia (гордыня)'],
    
];
$i = rand(0, count($images)-1);
$selectedImage = "images/{$images[$i]['file']}.jpg";
$caption = $images[$i]['caption'];
if (file_exists($selectedImage) && is_readable($selectedImage)) {
    $imageSize = getimagesize($selectedImage);
}
