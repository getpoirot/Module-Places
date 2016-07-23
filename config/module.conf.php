<?php
return array(
    Module\MongoDriver\Module::CONF_KEY => array(
        \Module\Places\Services\ServiceRepositoryPlaces::CONF_KEY => array(
            'collections' => array(
                // query on which collection
                'places' => array(
                    // which client to connect and query with
                    'client' => \Module\MongoDriver\MongoDriverManagementFacade::CLIENT_DEFAULT,
                    // ensure indexes
                    'indexes' => array(
                        array('key' => array('geometry.location' => '2dsphere')),
                    )
                ),
            ),
        ),
    ),
);
