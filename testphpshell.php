<?php

$file = '123';
$file = $file . ".jpg";
$final = "http://140.117.169.42/project/picture/tops/".$file.".jpg";
echo $final;
/*chdir('picture');
chdir('jackets');

  $file = '141.jpg';
    header('Content-Type: image/jpeg');
    header('Content-Length: ' . filesize($file));
    echo file_get_contents($file);*/

?>
