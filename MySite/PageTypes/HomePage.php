<?php namespace MySite\PageTypes;

class HomePage extends \CoandaCMS\Coanda\Pages\PageType {

    protected $name = 'Home Page';
    protected $icon = 'fa-home';
    protected $schema = [
        'name' => 'Name|textline|required',
        'content' => 'Content|html'
    ];
}