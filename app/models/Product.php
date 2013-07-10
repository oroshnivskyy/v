<?php
use Awareness\Aware\Model as Eloquent;

class Product extends Eloquent{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    public static $rules = [
        'name' => array('required', 'min:5'),
        'description' => array('required', 'min:5'),
        'cost' =>array(),
        'url' =>array('required','regex:/^[a-z\d][a-z\d\\-]{5,}[a-z\d]$/'),
        'title' => array('required',),
        'meta_keywords' => array('required',),
        'meta_description' => array('required',),
        'title' => array('required',),
        'group' => array('required','exists:products_groups'),
        'image' => array('required',),
    ];
    public static $messages = array(
        'required' => 'Please enter :attribute',
        'url.regex' => 'Wrong url, must be only a-z 1-9 and -'
    );
    protected $table = 'products';
    
    public function group(){
        return $this->belongsTo('ProductGroup','group_id');
    }

    public function images(){
        return $this->hasMany('ProductImage', 'product_id');
    }
}