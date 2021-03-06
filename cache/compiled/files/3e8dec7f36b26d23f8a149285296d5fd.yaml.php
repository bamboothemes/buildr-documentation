<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'system/blueprints/config/site.yaml',
    'modified' => 1482976744,
    'data' => [
        'title' => 'Site',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'content' => [
                    'type' => 'section',
                    'title' => 'Defaults',
                    'fields' => [
                        'title' => [
                            'type' => 'text',
                            'label' => 'Site Title',
                            'size' => 'large',
                            'placeholder' => 'Site wide title',
                            'help' => 'Default title for your site, often used in themes'
                        ],
                        'author.name' => [
                            'type' => 'text',
                            'size' => 'large',
                            'label' => 'Default Author',
                            'help' => 'A default author name, often used in themes or page content'
                        ],
                        'author.email' => [
                            'type' => 'text',
                            'size' => 'large',
                            'label' => 'Default Email',
                            'help' => 'A default email to reference in themes or pages',
                            'validate' => [
                                'type' => 'email'
                            ]
                        ],
                        'taxonomies' => [
                            'type' => 'selectize',
                            'size' => 'large',
                            'label' => 'Taxonomy Types',
                            'classes' => 'fancy',
                            'help' => 'Taxonomy types must be defined here if you wish to use them in pages',
                            'validate' => [
                                'type' => 'commalist'
                            ]
                        ]
                    ]
                ],
                'summary' => [
                    'type' => 'section',
                    'title' => 'Page Summary',
                    'fields' => [
                        'summary.enabled' => [
                            'type' => 'toggle',
                            'label' => 'Enabled',
                            'highlight' => 1,
                            'help' => 'Enable page summary (the summary returns the same as the page content)',
                            'options' => [
                                1 => 'Yes',
                                0 => 'No'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'summary.size' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'Summary Size',
                            'help' => 'The amount of characters of a page to use as a content summary',
                            'validate' => NULL,
                            'min' => 0,
                            'max' => 65536
                        ],
                        'summary.format' => [
                            'type' => 'toggle',
                            'label' => 'Format',
                            'classes' => 'fancy',
                            'help' => 'short = use the first occurrence of delimiter or size; long = summary delimiter will be ignored',
                            'highlight' => 'short',
                            'options' => [
                                'short' => 'Short',
                                'long' => 'Long'
                            ]
                        ],
                        'summary.delimiter' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'Delimiter',
                            'help' => 'The summary delimiter (default \'===\')'
                        ]
                    ]
                ],
                'metadata' => [
                    'type' => 'section',
                    'title' => 'Metadata',
                    'fields' => [
                        'metadata' => [
                            'type' => 'array',
                            'label' => 'Metadata',
                            'help' => 'Default metadata values that will be displayed on every page unless overridden by the page',
                            'placeholder_key' => 'Name',
                            'placeholder_value' => 'Content'
                        ]
                    ]
                ],
                'routes' => [
                    'type' => 'section',
                    'title' => 'Redirects & Routes',
                    'fields' => [
                        'redirects' => [
                            'type' => 'array',
                            'label' => 'Custom Redirects',
                            'help' => 'routes to redirect to other pages. Standard Regex replacement is valid',
                            'placeholder_key' => '/your/alias',
                            'placeholder_value' => '/your/redirect'
                        ],
                        'routes' => [
                            'type' => 'array',
                            'label' => 'Custom Routes',
                            'help' => 'routes to alias to other pages. Standard Regex replacement is valid',
                            'placeholder_key' => '/your/alias',
                            'placeholder_value' => '/your/route'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
