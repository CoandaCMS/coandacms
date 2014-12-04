<?php

return array(

	'site_name' => 'Coanda CMS',
	'site_admin_email' => 'admin@yoursite.com',

	/*
	|--------------------------------------------------------------------------
	| Modules
	|--------------------------------------------------------------------------
	|
	*/
	'enabled_modules' => [
		// 'CoandaCMS\CoandaWebForms\WebFormsModuleProvider',
		// 'MySite\Modules\Example\ExampleModuleProvider',
	],


	/*
	|--------------------------------------------------------------------------
	| Page settings - available types, home page types and publish handlers
	|--------------------------------------------------------------------------
	|
	*/
    // e.g 'MySite\PageTypes\Page'
	'page_types' => [
        'MySite\PageTypes\Page'
	],

    // e.g. 'MySite\PageTypes\HomePage'
	'home_page_types' => [
        'MySite\PageTypes\HomePage'
	],

	'publish_handlers' => [
		'CoandaCMS\Coanda\Pages\PublishHandlers\Delayed',
	],

	/*
	|--------------------------------------------------------------------------
	| Design & Layout settings
	| e.g 'MySite\Layouts\DefaultLayout'
	|--------------------------------------------------------------------------
	|
	*/
	'layouts' => [
        'MySite\Layouts\DefaultLayout'
	],

	'default_layout' => 'default',

	/*
	|--------------------------------------------------------------------------
	| Media settings
	|--------------------------------------------------------------------------
	|
	*/
    'available_image_sizes' => [ 100, 250, 500, 1000 ],

	/*
	|--------------------------------------------------------------------------
	| Search settings
	|--------------------------------------------------------------------------
	|
	*/
	'search_provider' => 'CoandaCMS\Coanda\Search\Basic\CoandaBasicSearchProvider',

	/*
	|--------------------------------------------------------------------------
	| Cache settings
	|--------------------------------------------------------------------------
	|
	*/
	'page_cache_enabled' => false,
	'page_cache_lifetime' => 10, // in minutes
);
