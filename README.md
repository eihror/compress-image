# Compress Image

Compress your image without losing quality

## How to use

Clone this project inside the project that you want to use

```
composer require eihror/compress-image
```

Create variables to receive the elements

```
$source_url = 'koala.jpg'; //file that you wanna compress
$destination_url = 'koala_mini'; //name of new file compressed
$quality = 60; // Value that I chose
```

**The quality works only for JPG´s images. But if you wanna change the quality for PNG´s, you need to go 
inside the code and change manually. The GIF images hasn´t variable to change quality**

Default quality for PNG: **9 ( 0 - no compression, 9 - max compression )**

Create a new instance of a class

```
$image_compress = new Compress($source_url, $destination_url, $quality);
```

And make the compression calling the funcion **compress_image**

```
$image_compress->compress_image();
```

That´s it! Feel free to use and making the code better if you find something different or wrong