<?php
class Sponsor extends DataObject {

	private static $db = array(
		"SponsorUrl" => "Text",
	);

	private static $has_one = array(
		"SponsorPhoto" => "Image",
	);

	public function getCMSFields(){
		$fields = parent::getCMSFields();

		$fields->removeByName("Content");
		$fields->removeByName("Metadata");

		$fields->addFieldToTab("Root.Main", new UploadField("SponsorPhoto", "Sponsor Photo"));
		$fields->addFieldToTab("Root.Main", new TextField("SponsorUrl", "Sponsor URL (http://www.domain.com)"));
		
		return $fields;
		
	}

}
