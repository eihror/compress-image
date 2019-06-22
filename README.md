[![Latest Stable Version](https://poser.pugx.org/eihror/compress-image/v/stable)](https://packagist.org/packages/eihror/compress-image)
[![Total Downloads](https://poser.pugx.org/eihror/compress-image/downloads)](https://packagist.org/packages/eihror/compress-image)
[![Latest Unstable Version](https://poser.pugx.org/eihror/compress-image/v/unstable)](https://packagist.org/packages/eihror/compress-image)
[![License](https://poser.pugx.org/eihror/compress-image/license)](https://packagist.org/packages/eihror/compress-image)

# Compress Image

Compress your image without losing quality

## How to use

Clone this project inside the project that you want to use

```
composer require eihror/compress-image
```

Create variables to receive the elements

```
$file = 'koala.jpg'; //file that you wanna compress
$new_name_image = 'koala_mini'; //name of new file compressed
$quality = 60; // Value that I chose
$pngQuality = 9; // Exclusive for PNG files
$destination = 'content'; //This destination must be exist on your project
$maxsize = 5245330; //Set maximum image size in bytes. if no value given 5mb by default.
```

**The quality works only for JPG�s images. But if you want to change the file to PNG�s, you have to change manually via code. GIF doesn't affect the quality**

Default quality for PNG: **9 ( 0 - no compression, 9 - max compression )**
Create a new instance of a class

```
$image_compress = new Eihror\Compress\Compress($file, $new_name_image, $quality, $pngQuality, $destination, $maxsize);
```

And make the compression calling the function **compress_image**

```
$image_compress->compress_image();
```

This function will return only the name of new image compressed with your respective extension

That´s it! Feel free to use and making the code better if you find something different or wrong
