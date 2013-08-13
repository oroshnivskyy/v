<?php

return [
    'title' => 'Pages',
    'single' => 'page',
    'model' => 'Page',
    'form_width' => 700,
    'columns' => [
        'name' => [
            'title'=> 'Name'
        ],
    ],
    'edit_fields' => [
        'name' => ['title' => 'Name', 'type' => 'text', 'editable' => false],
        'text' => ['title' => 'Text', 'type' => 'wysiwyg'],
    ],
    'action_permissions' => [
        'update' => true,
        'delete' => false,
        'create' => false
    ]
];