<?php
$images = [
    ['file'    => 'LSH1',
     'caption' => 'Landspitalinn'],
    ['file'    => 'LSH2',
     'caption' => 'Landspitalinn'],
    ['file'    => 'LSH3',
     'caption' => 'Landspitalinn'],
    ['file'    => 'LSH4',
     'caption' => 'Landspitalinn'],
    ['file'    => 'LSH5',
     'caption' => 'Landspitalinn'],
 
    
];
$i = rand(0, count($images)-1);
$selectedImage = "images/{$images[$i]['file']}.jpg";
$caption = $images[$i]['caption'];
if (file_exists($selectedImage) && is_readable($selectedImage)) {
    $imageSize = getimagesize($selectedImage);
}
