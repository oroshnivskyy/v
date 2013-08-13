<?php

return [
    'title' => 'Orders',
    'single' => 'order',
    'model' => 'Purchase',
    'columns' => [
        'created_at' => [
            'title'=> 'Date'
        ],
        'username' => [
            'title' => 'Username',
        ],
        'phone' => [
            'title' => 'Phone'
        ],
        'note' => [
            'title' => 'Note'
        ],
        'product' => [
            'title' => 'Product',
            'relationship' => 'product',
            'select' => '(:table).name'
        ],
        'cost' => [
            'title' => 'Cost',
            'relationship' => 'product',
            'select' => '(:table).cost'
        ],
        'delivery' => [
            'title' => 'Delivery'
        ],
        'formatted_called' => [
            'title' => 'Called',
            'output' => '<input type="checkbox" (:value) disabled>',
        ],
        'formatted_success' => [
            'title' => 'Is successful',
            'output' => '<input type="checkbox" (:value) disabled>',
        ],
        'comment' => [
            'title' => 'Comment'
        ],
    ],
    'edit_fields' => [
        'called' => ['title' => 'Called', 'type' => 'bool'],
        'success' => ['title' => 'Is successful', 'type' => 'bool'],
        'comment' => ['title'=>'Comment', 'type'=>'textarea'],
    ],
    'action_permissions' => [
        'update' => true,
        'delete' => false,
        'create' => false
    ]
];