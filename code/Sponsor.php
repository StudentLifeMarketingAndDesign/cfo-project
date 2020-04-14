<?php

use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;
class Sponsor extends DataObject {

	private static $db = array(
		"Title" => 'Varchar',
		"SortOrder" => "Int",
		"SponsorUrl" => "Text"
	);

	private static $has_one = array(
		"SponsorPhoto" => Image::class,
	);
	
	private static $summary_fields = array(
		'Title' => 'Title',
		'SponsorUrl' => 'Sponsor URL'
	);

	public function getCMSFields(){
		$fields = parent::getCMSFields();

		$fields->removeByName("Content");
		$fields->removeByName("Metadata");
		$fields->removeByName("SortOrder");

		$fields->addFieldToTab("Root.Main", new UploadField("SponsorPhoto", "Sponsor Photo"));
		$fields->addFieldToTab("Root.Main", new TextField("SponsorUrl", "Sponsor URL (http://www.domain.com)"));
		
		return $fields;
		
	}

}
