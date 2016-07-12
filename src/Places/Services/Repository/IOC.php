<?php
namespace Module\Places\Services\Repository;

use Module\Places\Model\Repository\Places;

/**
 * Usage:
 *   to ease access to IoC nested containers
 *   Module\Places\Services\Repository\IOC::places()
 * 
 * @method static Places places(array $options=null)
 * @see \Module\Places\Services\ServiceRepositoryPlaces
 */
class IOC extends \IOC
{ }
