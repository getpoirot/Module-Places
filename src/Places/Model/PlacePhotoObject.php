<?php
namespace Module\Places\Model;

use Poirot\Std\Struct\aDataOptions;

class PlacePhotoObject extends aDataOptions
{
    protected $photoReference;
    protected $height;
    protected $width;
    
    /**
     * @return mixed
     */
    public function getPhotoReference()
    {
        return $this->photoReference;
    }

    /**
     * @param mixed $photoReference
     */
    public function setPhotoReference($photoReference)
    {
        $this->photoReference = $photoReference;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }
}
