<?php
use Poirot\Application\Sapi\Server\Http\ListenerDispatch;

return array(
    'home'  => array(
        'route'    => 'RouteSegment',
        ## 'allow_override' => true, ## default is true
        'options' => array(
            'criteria'    => '/',
            'match_whole' => true,
        ),
        'params'  => array(
            ListenerDispatch::CONF_KEY => function($services)
            {
                $places = \Module\Places\Services\Repository\IOC::places();
                $place  = $places->findAllNearby(20, 50, 10000000000);

                return [];
            },
        ),
    ),
);
