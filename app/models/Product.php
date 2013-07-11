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
    public static $messages = array(
        'required' => 'Please enter :attribute',
        'url.regex' => 'Wrong url, must be only a-z 1-9 and -',
        'validation.integer' => ":attribute must be integer"
    );
    
    public function group(){
        return $this->belongsTo('ProductGroup','group_id');
    }

    public function images(){
        return $this->hasMany('ProductImage', 'product_id');
    }
}