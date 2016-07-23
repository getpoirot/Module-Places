<?php
namespace Module\Places\Services;

use Module\Categories\Model\Repository;

use Module\MongoDriver\Services\aServiceRepository;

class ServiceRepositoryPlaces
    extends aServiceRepository
{
    const CONF_KEY = 'places-repository';
    
    /** @var string Service Name */
    protected $name = 'places';

    protected $default_collection = 'places';

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

    /**
     * Get Key Of Merged Config To Retrieve Settings
     *  \Module\Categories\Module::CONF_KEY
     *
     * @return string
     */
    function getMergedConfKey()
    {
        return self::CONF_KEY;
    }
}
