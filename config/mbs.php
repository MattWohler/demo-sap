<?php

return [

    'containers' => [

        'routes' => [
            base_path('Containers/Geo/UI/WEB/Routes').'/geo.php',
            base_path('Containers/User/UI/WEB/Routes').'/user.php',
            base_path('Containers/File/UI/WEB/Routes').'/file.php',
            base_path('Containers/Media/UI/WEB/Routes').'/media.php',
            base_path('Containers/User/UI/WEB/Routes').'/profile.php',
            base_path('Containers/Publisher/UI/WEB/Routes').'/file.php',
            base_path('Containers/Publisher/UI/WEB/Routes').'/publisher.php',
            base_path('Containers/Publisher/UI/WEB/Routes').'/paymentinfo.php',
            base_path('Containers/Publisher/Containers/Deal/UI/WEB/Routes').'/deal.php',
            base_path('Containers/Publisher/Containers/Deal/UI/WEB/Routes').'/file.php',
            base_path('Containers/Publisher/Containers/Media/UI/WEB/Routes').'/media.php',
            base_path('Containers/Publisher/Containers/Campaign/UI/WEB/Routes').'/file.php',
            base_path('Containers/Publisher/Containers/Contact/UI/WEB/Routes').'/contact.php',
            base_path('Containers/User/Containers/Permission/UI/WEB/Routes').'/permission.php',
            base_path('Containers/Publisher/Containers/Campaign/UI/WEB/Routes').'/campaign.php',
        ]
    ],

    'geo' => [
        'base_uri' => env('GEO_BASE_URI'),
    ],
];
