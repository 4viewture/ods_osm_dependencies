<?php
$EM_CONF['ods_osm_dependencies'] = [
    'title' => 'OpenStreetMap ods_osmDependencies',
    'description' => 'Just adds the dependencies',
    'author' => '4viewture',
    'author_email' => 'hello@4viewture.de',
    'category' => 'plugin',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.9-12.4.99',
            'ods_osm' => "4.2.0-4.99.99"
        ],
        'conflicts' => [],
        'suggests' =>  [],
    ],
    'state' => 'stable',
    'version' => '1.0.0',
];
