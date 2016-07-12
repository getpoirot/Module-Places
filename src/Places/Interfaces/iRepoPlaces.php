<?php
namespace Module\Places\Interfaces;

use Module\Places\Model\Place;

interface iRepoPlaces
{
    /**
     * Adds new category
     *
     * @param array|\Traversable $data   DataStruct of place fields
     *
     * @return Place Inserted place contains ID
     */
    function insert($data);

    /**
     * Find Nearby Places
     *
     * @param float $longitude
     * @param float $latitude
     * @param null  $maxDistance Distance In Meter
     * 
     * @return \Traversable[Place]
     */
    function findAllNearby($longitude, $latitude, $maxDistance = null);

    /**
     * Gets place by given id
     *
     * @param string $placeID
     *
     * @return Place
     * @throws \Exception Not Exists
     */
    function findByID($placeID);

    /**
     * Delete place
     *
     * @param Place $place The place instance
     *
     * @return int Deleted Count
     */
    function delete(Place $place);
}
