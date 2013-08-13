<?php

return [

    /**
     * Settings page title
     * @type string
     */
    'title' => 'Site Settings',

    /**
     * The edit fields array
     * @type array
     */
    'edit_fields' => [
        'site_name' => [
            'title' => 'Site Name',
            'type' => 'text',
            'limit' => 50,
        ],
        'page_cache_lifetime' => [
            'title' => 'Page Cache Lifetime (in minutes)',
            'type' => 'number',
        ],
    ],

    /**
     * The validation rules for the form, based on the Laravel validation class
     * @type array
     */
    'rules' => [
        'site_name' => 'required|max:50',
        'page_cache_lifetime' => 'required|integer',
    ],

    /**
     * The permission option is an authentication check that lets you define a closure that should return true if the current user
     * is allowed to view this settings page. Any "falsey" response will result in a 404.
     * @type closure
     */
    'permission'=> function()
    {
        return Auth::check();
    },

    /**
     * This is where you can define the settings page's custom actions
     */
    'actions' => [
        //Ordering an item up
        'clear_page_cache' => [
            'title' => 'Clear Cache',
            'messages' => [
                'active' => 'Clearing cache...',
                'success' => 'Cache Cleared',
                'error' => 'There was an error while clearing the page cache',
            ],
            //the settings data is passed to the closure and saved if a truthy response is returned
            'action' => function(&$data)
            {
                 Cache::flush();

                return true;
            }
        ],
    ],
];