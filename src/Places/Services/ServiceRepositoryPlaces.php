<?php
namespace Module\Places\Services;

use Module\Categories\Model\Repository;

use Module\MongoDriver\Services\aServiceRepository;

class ServiceRepositoryPlaces
    extends aServiceRepository
{
    /** @var string Service Name */
    protected $name = 'places';

    
    /**
     * Repository Class Name
     *   Module\Categories\Model\Repository\Categories
     *
     * @return string
     */
    function getRepoClassName()
    {
        return \Module\Places\Model\Repository\Places::class;
    }
}
