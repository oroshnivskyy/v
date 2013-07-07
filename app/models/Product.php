<?php

class Product extends Eloquent{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';
    
    public function group(){
        return $this->belongsTo('ProductGroup','group_id');
    }
}