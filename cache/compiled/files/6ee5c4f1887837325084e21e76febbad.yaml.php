<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/dan/Sites/blog-site/user/config/site.yaml',
    'modified' => 1553268826,
    'data' => [
        'title' => 'Grav',
        'author' => [
            'name' => 'Joe Bloggs',
            'email' => 'joe@test.com'
        ],
        'blog' => [
            'route' => ''
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'sleeps',
            3 => 'bedrooms',
            4 => 'region',
            5 => 'month'
        ],
        'redirects' => [
            '/changelog' => '/blog/the-urban-jungle'
        ],
        'routes' => [
            '/something/else' => '/blog/focus-and-blur',
            '/another/one/(.*)' => '/blog/$1'
        ]
    ]
];
