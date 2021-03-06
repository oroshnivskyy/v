<?php

return [
    'title' => 'Products',
    'form_width' => 400,
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
        'size' => [
            'title' => 'Size',
        ],
        'url' => [
            'title' => 'Url'
        ],
        'title' => ['title'=>'Title'],
        'group' => [
            'title' => 'Group',
            'relationship' => 'group',
            'select' => '(:table).name'
        ],
        'image' => [
            'title' => 'Main image',
            'output' => '<img style="width: 55px;" src="/img/uploaded/products/medium/(:value)">'
        ],
        'rating' => [
            'title' => 'Rating',
        ]

    ],
    'edit_fields' => [
        'name' => ['title' => 'Name', 'type' => 'text'],
        'description' => ['title' => 'Description', 'type' => 'wysiwyg'],
        'cost' => ['title' => 'Cost', 'type' => 'number', 'symbol'=>'₴', 'thousands_separator' => ' '],
        'size' => ['title' => 'Size', 'type' => 'text'],
        'count' => ['title' => 'Count', 'type' => 'text'],
        'rating' => ['title' => 'Rating', 'type' => 'number'],
        'group' => ['title' => 'Group', 'type' => 'relationship'],
        'title' => ['title'=>'Title', 'type'=>'text'],
        'url' => ['title'=>'Url', 'type'=>'text'],
        'meta_keywords' => ['title'=>'Meta keywords', 'type'=>'textarea'],
        'meta_description' => ['title'=>'Meta Description', 'type'=>'textarea'],
        'bottom_text' => ['title'=>'Bottom text', 'type'=>'wysiwyg'],
        'image_alt' => ['title'=>'Image alt', 'type'=>'text'],
        'image' => [
            'title' => 'Main image',
            'type' => 'image',
            'naming' => 'random',
            'location' => Product::uploadPath() . 'base/',
            'size_limit' => 10,
            'sizes' => [
                [300,300,'fit', Product::uploadPath().'main/',100],
                [1500,1500,'fit', Product::uploadPath().'big/',100],
                [210,210,'fit', Product::uploadPath() . 'medium/',100]
            ]
        ],
        'image1' => [
            'title' => 'Image 1',
            'type' => 'image',
            'naming' => 'random',
            'location' => Product::uploadPath() . 'base/',
            'size_limit' => 10,
            'sizes' => [
                [300,300,'fit', Product::uploadPath().'main/',100],
                [1500,1500,'fit', Product::uploadPath().'big/',100],
                [210,210,'fit', Product::uploadPath() . 'medium/',100]
            ]
        ],
        'image2' => [
            'title' => 'Image 2',
            'type' => 'image',
            'naming' => 'random',
            'location' => Product::uploadPath() . 'base/',
            'size_limit' => 10,
            'sizes' => [
                [300,300,'fit', Product::uploadPath().'main/',100],
                [1500,1500,'fit', Product::uploadPath().'big/',100],
                [210,210,'fit', Product::uploadPath() . 'medium/',100]
            ]
        ],
        'image3' => [
            'title' => 'Image 3',
            'type' => 'image',
            'naming' => 'random',
            'location' => Product::uploadPath() . 'base/',
            'size_limit' => 10,
            'sizes' => [
                [300,300,'fit', Product::uploadPath().'main/',100],
                [1500,1500,'fit', Product::uploadPath().'big/',100],
                [210,210,'fit', Product::uploadPath() . 'medium/',100]
            ]
        ],
        'image4' => [
            'title' => 'Image 4',
            'type' => 'image',
            'naming' => 'random',
            'location' => Product::uploadPath() . 'base/',
            'size_limit' => 10,
            'sizes' => [
                [300,300,'fit', Product::uploadPath().'main/',100],
                [1500,1500,'fit', Product::uploadPath().'big/',100],
                [210,210,'fit', Product::uploadPath() . 'medium/',100]
            ]
        ],
        
    ],
    'action_permissions' => [
        'update' => true,
        'delete' => true,
        'create' => true
    ],
    
    'filters' => [
        'id',
        'name' => [
            'title' => 'Name',
        ],
        'title' => [
            'title' => 'Title',
        ],
        'group' => [
            'type' => 'relationship',
            'title' => 'Group',
            'name_field' => 'name',
        ]
    ],
    'link' => function($model)
    {
        $groupUrl = ProductGroup::find($model->group_id,['url'])->url;
        return URL::route('product', array($groupUrl,$model->url));
    },
];