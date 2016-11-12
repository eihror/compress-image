<?php

require '../autoload.php';

$source_url = 'koala.jpg'; //file that you wanna compress
$destination_url = 'koala_mini'; //name of new file compressed
/*
 * Quality: 0 - 100
 * 0: Worst quality
 * 100: Beautiful, but still the same size as the original image or bigger
 */
$quality = 60; // Value that I chose

$image_compress = new Compress($source_url, $destination_url, $quality);

echo $image_compress->compress_image();
