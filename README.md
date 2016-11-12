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
$destination = 'content'; //This destination must be exist on your project
```

**The quality works only for JPG´s images. But if you wanna change the quality for PNG´s, you need to go 
inside the code and change manually. The GIF images hasn´t variable to change quality**

Default quality for PNG: **9 ( 0 - no compression, 9 - max compression )**

Create a new instance of a class

```
$image_compress = new Compress($file, $new_name_image, $quality, $destination);
```

And make the compression calling the funcion **compress_image**

```
$image_compress->compress_image();
```

This funtion will return only the name of new image compressed with your respective extension

That´s it! Feel free to use and making the code better if you find something different or wrong