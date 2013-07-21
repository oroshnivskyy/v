<?php

class Purchase extends Eloquent {
    protected $guarded = array();

    public static $rules = array();
    protected $table = 'purchase';
    public $timestamps = true;

    public function product(){
        return $this->belongsTo('Product','product_id');
    }
    
    public function getFormattedCalledAttribute(){
        if($this->called)
            return 'checked';
        return '';
    }

    public function getFormattedSuccessAttribute(){
        if($this->success)
            return 'checked';
        return '';
    }
}