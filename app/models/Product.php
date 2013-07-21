<?php

class Product extends Eloquent{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';
    public $timestamps = true;

    public static $rules = [
        'name' => array('required', 'min:5'),
        'description' => array('required', 'min:15'),
        'image_alt' => array('required', 'min:10'),
        'cost' =>array('required', ),
        'cost' =>array('required', 'integer'),
        'url' =>array('required','regex:/^[a-z\d][a-z\d\\-]{5,}[a-z\d]$/'),
        'title' => array('required',),
        'meta_keywords' => array('required',),
        'meta_description' => array('required',),
        'title' => array('required',),
        'group_id' => array('required'),
        'image' => array('required',),
    ];
    
    public function group(){
        return $this->belongsTo('ProductGroup','group_id');
    }

    public function images(){
        return $this->hasMany('ProductImage', 'product_id');
    }

    public function getImageUrl(){
        return static::imageWebPath().'main/'.$this->image;
    }
    public function getBaseImageUrl(){
        return static::imageWebPath().'main/'.$this->image;
    }
    public function getBigImageUrl(){
        return static::imageWebPath().'big/'.$this->image;
    }
    public function getMediumImageUrl(){
        return static::imageWebPath().'medium/'.$this->image;
    }
    
    public static function imageWebPath(){
        return '/img/uploaded/products/';
    }

    public static function uploadPath(){
        return public_path().static::imageWebPath();
    }
}