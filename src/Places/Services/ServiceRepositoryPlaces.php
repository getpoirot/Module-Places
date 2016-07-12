<?php
namespace Module\Places\Services;

use Module\Categories\Model\Repository;

use Module\MongoDriver\Services\aServiceRepository;

/*
$categories = $services->fresh(
    '/module/categories/services/repository/categories'
    , ['db_collection' => 'trades.categories'] // override options
);
$r = $categories->getTree($categories->findByID('red'));
*/

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

    /**
     * Get Key Of Merged Config To Retrieve Settings
     *  \Module\Categories\Module::CONF_KEY
     *
     * @return string
     */
    function getMergedConfKey()
    {
        return \Module\Places\Module::CONF_KEY;
    }
}
