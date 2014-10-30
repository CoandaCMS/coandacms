<?php namespace MySite\PageTypes;

class Page extends \CoandaCMS\Coanda\Pages\PageType {

    /**
     * @return string
     */
    public function identifier()
    {
        return 'page';
    }

    /**
     * @return string
     */
    public function name()
    {
        return 'Page';
    }

    /**
     * @return string
     */
    public function icon()
    {
        return 'fa-file-text';
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
                'required' => true,
                'generates_slug' => true
            ],
            'short_name' => [
                'name' => 'Short name',
                'type' => 'textline',
                'required' => false
            ],
            'introduction' => [
                'name' => 'Introduction',
                'type' => 'html',
                'required' => false
            ],
            'content' => [
                'name' => 'Content',
                'type' => 'html',
                'required' => false
            ],
            'thumbnail_image' => [
                'name' => 'Thumbnail Image',
                'type' => 'image',
                'required' => false
            ],
            'hide_sub_pages' => [
                'name' => 'Hide sub pages',
                'type' => 'boolean',
                'default' => false,
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
        $short_name = $version->getAttributeByIdentifier('name')->typeData();

        if ($short_name !== '')
        {
            return $short_name;
        }

        return $version->getAttributeByIdentifier('name')->typeData();
    }

    /**
     * @return bool
     */
    public function canStaticCache()
    {
        return true;
    }

    /**
     * @return array
     */
    public function availableTemplates()
    {
        return [
            [
                'identifier' => 'different_template',
                'name' => 'A different template'
            ],
       ];
    }
}