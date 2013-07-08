<?php

return [
    'title' => 'Products',
    'single' => 'product',
    'model' => 'Product',
    'columns' => [
        'name' => [
            'title' => 'Name',
        ],
        'description' => [
            'title' => 'Description',
        ],
        'cost' => [
            'title' => 'Cost',
        ],
        'url' => [
            'title' => 'Url'
        ],
        'title' => ['title'=>'Title'],
//        'meta_keywords' => ['title'=>'Keywords'],
//        'meta_description' => ['title'=>'Meta Description'],
        'group' => [
            'title' => 'Group',
            'relationship' => 'group',
            'select' => '(:table).name'
        ],
        'image' => [
            'title' => 'Main image',
            'output' => '<img src="'.public_path().'img/uploaded/products/landscape/(:value)">'
        ]

    ],
    'edit_fields' => [
        'name' => ['title' => 'Name', 'type' => 'text'],
        'description' => ['title' => 'Description', 'type' => 'textarea'],
        'cost' => ['title' => 'Cost', 'type' => 'number', 'symbol'=>'₴', 'thousands_separator' => ' '],
        'count' => ['title' => 'Count', 'type' => 'text'],
        'group' => ['title' => 'Group', 'type' => 'relationship'],
        'title' => ['title'=>'Title', 'type'=>'text'],
        'url' => ['title'=>'Url', 'type'=>'text'],
        'meta_keywords' => ['title'=>'Meta keywords', 'type'=>'textarea'],
        'meta_description' => ['title'=>'Meta Description', 'type'=>'textarea'],
        'image' => [
            'title' => 'Main image',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path() . 'img/uploaded/products/base',
            'size_limit' => 10,
            'sizes' => [
                [300,300,'fit', public_path() . 'img/uploaded/products/main'],
                [300,300,'landscape', public_path() . 'img/uploaded/products/landscape']
            ]
        ]
    ],
    'action_permissions' => [
        'update' => true,
        'delete' => true,
        'create' => true
    ]
];