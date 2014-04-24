<?php namespace MySite\Coanda\PageTypes;

class Page implements \CoandaCMS\Coanda\Pages\PageTypeInterface {

	public $name = 'Page';
	public $identifier = 'page';

	public function attributes()
	{
		return [
				'name' => [
					'name' => 'Name',
					'identifier' => 'name',
					'type' => 'textline',
					'required' => true,
					'generates_slug' => true
				],
				'content' => [
					'name' => 'Content',
					'identifier' => 'content',
					'type' => 'html',
					'required' => true
				]
			];
	}

	public function generateName($version)
	{
		return $version->getAttributeByIdentifier('name')->typeData();
	}

	public function showMeta()
	{
		return true;
	}
}