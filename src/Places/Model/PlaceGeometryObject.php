<?php
namespace Module\Places\Model;

use Poirot\Std\Struct\aDataOptions;

class PlaceGeometryObject extends aDataOptions
{
    const Location          = 'location';
    const AddressComponents = 'address_components';

    protected $location;
    protected $addressComponents = [];


    /**
     * @return array
     */
    function getLocation()
    {
        return $this->location;
    }

    /**
     * Data In Form Of:
     *
     * !! Mongo Consideration:
     *    regardless of the name of the field in the embedded document,
     *    the first field should contain the longitude value and the second
     *    field should contain the latitude value.
     *
     * [ "lon": 28.5122077,
     *   "lat": 53.5818702 ]
     *
     * @param \Traversable $location
     * @return $this
     */
    function setLocation($location)
    {
        if ($location instanceof \Traversable)
            $location = iterator_to_array($location);

        $lon = (isset($location['lon'])) ? $location['lon'] : current($location);
        $lat = (isset($location['lat'])) ? $location['lat'] : next($location);

        $this->location = [
            'lon' => $lon,
            'lat' => $lat,
        ];

        return $this;
    }


    /**
     * @return array
     */
    function getAddressComponents()
    {
        return $this->addressComponents;
    }

    /**
     * @param \Traversable|array $addressComponents
     * @return $this
     */
    function setAddressComponents($addressComponents)
    {
        $this->clearAddressComponent();
        
        foreach ($addressComponents as $ac)
            $this->setAddressComponent($ac);

        return $this;
    }

    /**
     * Data In Form Of:
     *
     * [ "long_name" => "Pirrama Road",
     *   "short_name"=> "Pirrama Road",
     *   "types" => [ "route" ] ]
     *
     * @param \Traversable $component
     * @return $this
     */
    function setAddressComponent($component)
    {
        if ($component instanceof \Traversable)
            $component = iterator_to_array($component);

        $this->addressComponents[] = $component;
        return $this;
    }

    function clearAddressComponent()
    {
        $this->addressComponents = [];
        return $this;
    }
}

