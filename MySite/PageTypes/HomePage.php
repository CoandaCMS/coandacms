<?php namespace MySite\PageTypes;

class HomePage extends \CoandaCMS\Coanda\Pages\PageType {

    public function identifier()
    {
        return 'home_page';
    }

    public function name()
    {
        return 'Home Page';
    }

    public function icon()
    {
        return 'fa-home';
    }

    public function allowsSubPages()
    {
        return false;
    }

    public function attributes()
    {
        return [
            'name' => [
                'name' => 'Name',
                'type' => 'textline',
                'required' => true
            ],
            'content' => [
                'name' => 'Content',
                'type' => 'html',
                'required' => false
            ],
        ];
    }

    public function generateName($version)
    {
        return $version->getAttributeByIdentifier('name')->typeData();
    }
}