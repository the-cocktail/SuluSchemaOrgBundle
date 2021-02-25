<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/uploads/media/(.*)(*:26)'
                .'|/media/(\\d+)/download/([^/]++)(*:63)'
                .'|/admin/media/(\\d+)/download/([^/]++)(*:106)'
                .'|/((?:^$)?)search(?:\\.([^/]++))?(*:145)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'sulu_media.website.image.proxy', '_controller' => 'sulu_media.media_stream_controller:getImageAction', '_requestAnalyzer' => false], ['slug'], null, null, false, true, null]],
        63 => [[['_route' => 'sulu_media.website.media.download', '_controller' => 'sulu_media.media_stream_controller:downloadAction', '_requestAnalyzer' => false], ['id', 'slug'], null, null, false, true, null]],
        106 => [[['_route' => 'sulu_media.website.media.download_admin', '_controller' => 'sulu_media.media_stream_controller:downloadAction', '_requestAnalyzer' => false], ['id', 'slug'], null, null, false, true, null]],
        145 => [
            [['_route' => 'sulu_search.website_search', '_controller' => 'sulu_search.controller.website_search:queryAction', '_format' => 'html'], ['prefix', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
