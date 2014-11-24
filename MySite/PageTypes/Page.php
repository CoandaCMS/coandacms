<?php namespace MySite\PageTypes;

class Page extends \CoandaCMS\Coanda\Pages\PageType {

    protected $name = 'Page';
    protected $schema = [
        'name' => 'Name|textline|required|generates_slug',
        'short_name' => 'Short name|textline',
        'introduction' => 'Introduction|html',
        'content' => 'Content|html',
        'thumbnail_image' => 'Thumbnail Image|image',
        'hide_sub_pages' => 'Hide sub pages|boolean'
    ];

    protected $templates = [
        'different_template' => 'A different template',
    ];

    /**
     * @param $version
     * @return mixed
     */
    public function generateName($version)
    {
        $short_name = $version->getAttributeByIdentifier('short_name')->typeData();

        if ($short_name !== '')
        {
            return $short_name;
        }

        return $version->getAttributeByIdentifier('name')->typeData();
    }
}