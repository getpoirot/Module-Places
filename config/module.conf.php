<?php
return array(
    \Module\Places\Module::CONF_KEY
    => array(
        \Module\MongoDriver\Services\aServiceRepository::CONF_KEY => array(
            'client' => \Module\MongoDriver\MongoDriverManagementFacade::CLIENT_DEFAULT,
            'collection' => array(
                'name'    => 'places',
                'indexes' => array(
                    array('key' => array('geometry.location' => '2dsphere')),
                )
            )
        ),
    ),
);
