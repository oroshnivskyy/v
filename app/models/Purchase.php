<?php

class Purchase extends Eloquent {
    protected $guarded = array();

    public static $rules = array();
    protected $table = 'purchase';
    public $timestamps = true;
}