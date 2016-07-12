<?php
/** @see \Poirot\Ioc\Container\BuildContainer */
return array(
    'nested' 
        => array(
            'repository' => array(
                'services' => array(
                    # Module\Places\Services\ServiceRepositoryPlaces::class,
                    '\Module\Places\Services\ServiceRepositoryPlaces',  // places repository
                ),
            ),
        ),
);
