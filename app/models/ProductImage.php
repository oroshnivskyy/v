<?php

class ProductImage extends Eloquent
{
    /**
     * @var string
     */
    protected $table = 'products_groups';
    protected $guarded = array();
    public static $rules = array();

    public function product()
    {
        return $this->belongsTo('Product', 'product_id');
    }

}