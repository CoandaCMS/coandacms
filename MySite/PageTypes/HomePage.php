<?php namespace MySite\PageTypes;

class HomePage extends \CoandaCMS\Coanda\Pages\PageType {

    /**
     * @return string
     */
    public function identifier()
    {
        return 'home_page';
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'Home Page';
    }

    /**
     * @return string
     */
    public function icon()
    {
        return 'fa-home';
    }

    /**
     * @return bool
     */
    public function allowsSubPages()
    {
        return false;
    }

    /**
     * @return array
     */
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

    /**
     * @param $version
     * @return mixed
     */
    public function generateName($version)
    {
        return $version->getAttributeByIdentifier('name')->typeData();
    }
}