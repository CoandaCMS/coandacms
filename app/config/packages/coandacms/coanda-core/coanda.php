<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Admin path (e.g. yoursite.com/admin)
	|--------------------------------------------------------------------------
	|
	*/
	'admin_path' => 'admin',

	'site_name' => 'Coanda CMS',

	'site_admin_email' => 'admin@yoursite.com',

	'admin_colour' => '#FF6600',

	/*
	|--------------------------------------------------------------------------
	| Some default settings
	|--------------------------------------------------------------------------
	|
	*/
	'datetime_format' => 'd/m/Y H:i',

	'date_format' => 'd/m/Y',

	/*
	|--------------------------------------------------------------------------
	| Available attributes, used by page types and layout blocks
	|--------------------------------------------------------------------------
	|
	*/
	'attribute_types' => [
		'CoandaCMS\Coanda\Core\Attributes\Types\Textline',
		'CoandaCMS\Coanda\Core\Attributes\Types\HTML',
		'CoandaCMS\Coanda\Core\Attributes\Types\Boolean',
		'CoandaCMS\Coanda\Core\Attributes\Types\Image',
		'CoandaCMS\Coanda\Core\Attributes\Types\Date',
		'CoandaCMS\Coanda\Core\Attributes\Types\Dropdown',
		'CoandaCMS\Coanda\Core\Attributes\Types\Integer',
		'CoandaCMS\Coanda\Core\Attributes\Types\Checkboxes',
		'CoandaCMS\Coanda\Core\Attributes\Types\DateTime',
	],

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

    // e.g. 'search:results' => 'default'
	'layout_mapping' => [
	],

	'default_layout' => 'default',

	/*
	|--------------------------------------------------------------------------
	| Media settings
	|--------------------------------------------------------------------------
	|
	*/
    // This should return the full path to the directory and should be writable.
	'uploads_directory' => base_path() . '/uploads',
	'image_cache_directory' => 'i',
    'available_image_sizes' => [ 100, 250, 500, 1000 ],
    'image_quality' => 90,
	'file_cache_directory' => 'f',

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
