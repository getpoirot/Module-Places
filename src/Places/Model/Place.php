<?php
namespace Module\Places\Model;

use Module\MongoDriver\Model\aPersistable;

/*
$place = new \Module\Places\Model\Place([
    'title'       => 'Restaurant Title',
    'slogan'      => 'Feels Good.',
    'logo'        => 'CnRnAAAAF-LjFR1ZV93eawe1cU_3QNMCNmaGkowY7CnOf',
    'description' => 'description about restaurant',
    'types'       => ['food', 'restaurant'],
    'info'        => [
        'phones'  => [ "54345345", ["fax" => "23423423" ], 'mobile'=> ['234234234', '234234234'] ],
        'website' => "www.site.com",
    ],
    'photos' => [
        new \Module\Places\Model\PlacePhotoObject([
            'photo_reference' => 'CnRnAAAAF-LjFR1ZV93eawe1cU_3QNMCNmaGkowY7CnOf',
            'height'          => 270,
            'width'           => 519,
        ])
    ],
    'geometry' => [
        'location'           => ['lon'=>28.5122077, 'lat'=>53.5818702],
        'address_components' => [
            [ 'long_name'=>"Pirrama Road", 'short_name'=>"Pirrama Road", 'types'=>['route'] ]
        ],
    ],
    'scope' => \Module\Places\Model\Place::SCOPE_OFFICIAL,
    'details' => [
        'specific_field' => "specific field data to this entity trade.",
    ],
]);
*/

class Place extends aPersistable
{
    const ID          = '_id';
    const Title       = 'title';
    const Slogan      = 'slogan';
    const Logo        = 'logo';
    const Description = 'description';
    const Scope       = 'scope';
    const Types       = 'types';
    const Details     = 'details';
    const Info        = 'info';
    const Geometry    = 'geometry';
    const Photos      = 'photos';
    
    const SCOPE_OFFICIAL = 'OFFICIAL';

    
    /** @var PlacePhotoObject[] */
    protected $photos = [];
    /** @var PlaceGeometryObject */
    protected $geometry;
    
    protected $types = [];
    
    /**
     * @return PlaceGeometryObject
     */
    function getGeometry()
    {
        if (!$this->geometry)
            $this->geometry = new PlaceGeometryObject;
        
        return $this->geometry;
    }

    /**
     * @param PlaceGeometryObject|array $geometry
     * @return $this
     */
    function setGeometry($geometry)
    {
        if (!$geometry instanceof PlaceGeometryObject)
            $geometry = new PlaceGeometryObject($geometry);
        
        $this->geometry = $geometry;
        return $this;
    }
    
    
    /**
     * @return PlacePhotoObject[]
     */
    function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param \Traversable $photos
     * @return $this
     */
    function setPhotos($photos)
    {
        $this->clearPhotos();
        
        foreach ($photos as $p)
            $this->setPhoto($p);

        return $this;
    }

    /**
     * @param array|PlacePhotoObject $photo
     * @return $this
     */
    function setPhoto($photo)
    {
        if (!$photo instanceof PlacePhotoObject)
            $photo = new PlacePhotoObject($photo);

        $this->photos[] = $photo;
        return $this;
    }

    /**
     * @return $this
     */
    function clearPhotos()
    {
        $this->photos = [];
        return $this;
    }

    /**
     * @param \Traversable $types
     * @return $this
     */
    function setTypes($types)
    {
        foreach ($types as $t)
            $this->setType($t);
        
        return $this;
    }

    /**
     * @param string $type
     * @return $this
     */
    function setType($type)
    {
        $this->types[] = (string) $type;
        return $this;
    }
    
    /**
     * @return array
     */
    function getTypes()
    {
        return $this->types;
    }
    
    function clearTypes()
    {
        $this->types = [];
        return $this;
    }
}
