<?php

return [
    'title' => 'Groups',
    'single' => 'group',
    'form_width' => 700,
    'model' => 'ProductGroup',
    'columns' => [
        'name' => [
            'title' => 'Name',
        ],
        'title' => [
            'title' => 'Title'
        ],
        'url' => [
            'title' => 'Url'
        ],
        'meta_keywords' => ['title'=>'Keywords'],
        'meta_description' => ['title'=>'Meta Description'],
        'parent' => [
            'title' => 'Parent group',
            'relationship' => 'parentGroup',
            'select' => '(:table).name'
        ],
//        'image' => [
//            'title' => 'Main image',
//            'output' => '<img src="/img/uploaded/groups/base/(:value)"  style="width: 150px;">'
//        ]

    ],
    'edit_fields' => [
        'name' => ['title' => 'Name', 'type' => 'text'],
        'title' => ['title'=>'Title', 'type'=>'text'],
        'url' => ['title'=>'Url', 'type'=>'text'],
        'meta_keywords' => ['title'=>'Meta keywords', 'type'=>'textarea'],
        'meta_description' => ['title'=>'Meta Description', 'type'=>'textarea'],
        'bottom_text' => ['title'=>'Bottom text', 'type'=>'wysiwyg'],
        'image_alt' => ['title'=>'Image alt', 'type'=>'text'],
        'image' => [
            'title' => 'Image',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path() . '/img/uploaded/groups/base/',
            'size_limit' => 10,
            'sizes' => [
            ]
        ]
    ],
    'action_permissions' => [
        'update' => true,
        'delete' => true,
        'create' => true
    ]
];