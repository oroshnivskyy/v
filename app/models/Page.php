<?php

class Page extends Eloquent {
    protected $guarded = array();

    public static $rules = array();
    protected $table = 'pages';
    public $timestamps = true;

}