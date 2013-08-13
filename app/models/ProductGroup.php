<?php

class ProductGroup extends Eloquent{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products_groups';

    public static $rules = [
        'name' => array('required', 'min:5'),
        'url' =>array('required','regex:/^[a-z\d][a-z\d\\-]{5,}[a-z\d]$/'),
        'title' => array('required',),
        'meta_keywords' => array('required',),
        'meta_description' => array('required',),
    ];
    
    public function products(){
        return $this->hasMany('Product','group_id');
    }
    
    public function childGroups(){
        return $this->hasMany('ProductGroup','parent_id');
    }
    
    public function parentGroup(){
        return $this->belongsTo('ProductGroup','parent_id');
    }
    
    public static function getActive(){
        return static::where('is_enabled','=',1)->where('parent_id','=','')->with('childGroups');
    }
}
