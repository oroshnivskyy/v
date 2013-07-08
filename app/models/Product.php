<?php
use Awareness\Aware\Model as Eloquent;

class Product extends Eloquent{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    public static $rules = [
        'name' => 'required',
    ];
    protected $table = 'products';
    
    public function group(){
        return $this->belongsTo('ProductGroup','group_id');
    }

    public function images(){
        return $this->hasMany('ProductImage', 'product_id');
    }
}