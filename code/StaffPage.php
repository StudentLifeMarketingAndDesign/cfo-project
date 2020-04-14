<?php

use SilverStripe\Assets\Image;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\CheckboxSetField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class StaffPage extends Page {

	private static $db = array(
		"FirstName" => "Text",
		"LastName" => "Text",
		"Position" => "Text",
		"EmailAddress" => "Text",
		"Phone" => "Text",
		"DepartmentURL" => "Text",
		"DepartmentName" => "Text",


	);

	private static $has_one = array(
		"Photo" => Image::class,
	);

	private static $belongs_many_many = array (
		"Teams" => "StaffTeam"
	);

	public function getCMSFields(){
		$fields = parent::getCMSFields();

		// $fields->removeByName("Content");

		$fields->addFieldToTab("Root.Main", new TextField("FirstName", "First Name"));
		$fields->addFieldToTab("Root.Main", new TextField("LastName", "Last Name"));
		$fields->addFieldToTab("Root.Main", new TextField("Position", "Position"));
		$fields->addFieldToTab("Root.Main", new TextField("EmailAddress", "Email address"));
		$fields->addFieldToTab("Root.Main", new TextField("Phone", "Phone (XXX-XXX-XXXX)"));
		$fields->addFieldToTab("Root.Main", new TextField("DepartmentName", "Department name (optional)"));
		$fields->addFieldToTab("Root.Main", new TextField("DepartmentURL", "Department URL (optional)"));


		$fields->addFieldToTab("Root.Main", new CheckboxSetField("Teams", 'Team <a href="admin/pages/edit/show/14" target="_blank">(Manage Teams)</a>', StaffTeam::get()->map('ID', 'Name')));

		//$fields->addFieldToTab("Root.Main", new LiteralField("TeamLabel", ''));

		$fields->addFieldToTab("Root.Main", new UploadField("Photo", "Photo (dimensions)"));
		$fields->addFieldToTab("Root.Main", new HTMLEditorField("Content", "Biography"));

		$fields->removeByName("Metadata");
		$fields->removeByName("BackgroundImage");
		$fields->removeByName("DepartmentURL");
		$fields->removeByName("DepartmentName");

		return $fields;

	}

	public function onBeforeWrite(){
   

    $this->owner->Title = $this->owner->FirstName.' '.$this->owner->LastName;

    parent::onBeforeWrite();
  }

	//private static $allowed_children = array("");

}
