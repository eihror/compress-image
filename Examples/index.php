<?php

require '../autoload.php';

$file = 'koala.jpg'; //file that you wanna compress
$new_name_image = 'koala_mini'; //name of new file compressed
/*
 * Quality: 0 - 100
 * 0: Worst quality
 * 100: Beautiful, but still the same size as the original image or bigger
 */
$quality = 60; // Value that I chose
$destination = 'content'; //This destination must be exist on your project

$image_compress = new Compress($file, $new_name_image, $quality, $destination);

echo $image_compress->compress_image();
