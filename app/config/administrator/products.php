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
        'count' => [
            'title' => 'Count',
        ],
        'group' => [
            'title' => 'Group',
            'relationship' => 'group',
            'select' => '(:table).name'
        ],
        
    ],
    'edit_fields' => [
        'name' => ['title'=>'Name', 'type'=>'Text'],
        'description' => ['title'=>'Description', 'type'=>'textarea'],
        'cost' => ['title'=>'Cost', 'type'=>'text'],
        'count' => ['title'=>'Count', 'type'=>'text'],
        'group' => ['title'=>'Group', 'type'=>'relationship'],
    ]
];