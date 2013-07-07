<?php

class ProductGroup extends Eloquent{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products_group';
    
    public function products(){
        return $this->hasMany('Product','group_id');
    }
    
    public function childGroups(){
        return $this->hasMany('ProductGroup','parent_id');
    }
    
    public function parentGroup(){
        return $this->belongsTo('ProductGroup','id');
    }
    
    public static function getActive(){
        return static::where('is_enabled','=',1)->where('parent_id')->with('childGroups');
    }
}