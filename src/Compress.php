<?php

class Compress {

    // @var source_url
    protected $source_url;

    // @var destination_url
    protected $destination_url;

    // @var quality
    protected $quality;

    // @var image_size
    protected $image_size;
    
    // @var image_data
    protected $image_data;
    
    // @var image_mime
    protected $image_mime;
    
    // @var array_img_types
    protected $array_img_types;
    
    public function __construct($source_url, $destination_url, $quality) {
        $this->set_source_url($source_url);
        $this->set_destination_url($destination_url);
        $this->set_quality($quality);
    }

    function get_source_url() {
        return $this->source_url;
    }

    function get_destination_url() {
        return $this->destination_url;
    }

    function get_quality() {
        return $this->quality;
    }

    function set_source_url($source_url) {
        $this->source_url = $source_url;
    }

    function set_destination_url($destination_url) {
        $this->destination_url = $destination_url;
    }

    function set_quality($quality) {
        $this->quality = $quality;
    }
    
    /**
     * Function to compress image
     * @return boolean
     * @throws Exception
     */
    public function compress_image(){
        
        //Send image array
        $array_img_types = array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png');
        $image = null;
        $image_extension = null;
        $destination_extension = null;
        $png_compression = 9;
        $gif_compression = 99;
        
        try{
            
            //If not found the file
            if(empty($this->source_url) && !file_exists($this->source_url)){
                throw new Exception('Please inform the image!');
                return false;
            }
            
            //Get image width, height, mimetype, etc..
            $image_data = getimagesize($this->source_url);
            //Set MimeType on variable
            $image_mime = $image_data['mime'];
            
            //Verifiy if the file is a image
            if(!in_array($image_mime, $array_img_types)){
                throw new Exception('Please send a image!');
                return false; 
            }
            
            //Get file size
            $image_size = filesize($this->source_url);
                                    
            //if image size is bigger than 5mb
            if($image_size > 10485760){
                throw new Exception('Please send a imagem smaller than 5mb!');
                return false;
            }
            
            //If not found the destination
            if(empty($this->destination_url)){
                throw new Exception('Please inform the destination name of image!');
                return false;
            }
            
            //If not found the quality
            if(empty($this->quality)){
                throw new Exception('Please inform the quality!');
                return false;
            }
            
            $image_extension = pathinfo($this->source_url, PATHINFO_EXTENSION);
            //Verify if is sended a destination file name with extension
            $destination_extension = pathinfo($this->destination_url, PATHINFO_EXTENSION); 
            //if empty
            if(empty($destination_extension)){
                $this->destination_url = $this->destination_url.'.'.$image_extension;
            }
            
            //Switch to find the file type
            switch ($image_mime){
                //if is JPG and siblings
                case 'image/jpeg':
                case 'image/pjpeg':
                    //Create a new jpg image
                    $image = imagecreatefromjpeg($this->source_url);
                    imagejpeg($image, $this->destination_url, $this->quality);
                    break;
                //if is PNG and siblings
                case 'image/png':
                case 'image/x-png':
                    //Create a new png image
                    $image = imagecreatefrompng($this->source_url);
                    imagealphablending($image , false);
                    imagesavealpha($image , true);
                    imagepng($image, $this->destination_url, $png_compression);
                    break;
                // if is GIF
                case 'image/gif':
                    //Create a new gif image
                    $image = imagecreatefromgif($imagem);
                    imagealphablending($image, false);
                    imagesavealpha($image, true);
                    imagegif($image, $this->destination_url, $gif_compression);
            }
            
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
        
        //Return the new image resized
        return $this->destination_url;
        
    }
}