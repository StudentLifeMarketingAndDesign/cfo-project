<?php

use SilverStripe\CMS\Model\VirtualPage;
use SilverStripe\Forms\CheckboxSetField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\Forms\GridField\GridField;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;
class StaffHolderPage extends Page {

	private static $db = array(
		
	);

	private static $has_one = array(
	
	);

	private static $belongs_many_many = array(
		"Teams" => "StaffTeam"
	);

	private static $allowed_children = array("StaffPage", VirtualPage::class);
	
	public function getCMSFields(){
		$f = parent::getCMSFields();
		
		$f->addFieldToTab('Root.Main', new CheckboxSetField("Teams", 'Show the following staff teams on this page:', StaffTeam::get()->map('ID', 'Title')), 'Content');
		
		//$f->removeByName("Content");
		$gridFieldConfig = GridFieldConfig_RecordEditor::create();
		$gridFieldConfig->addComponent(new GridFieldSortableRows('SortOrder'));
		
		
		$gridField = new GridField("StaffTeam", "Staff Teams", StaffTeam::get(), $gridFieldConfig);
		$f->addFieldToTab("Root.Main", $gridField, "Content"); // add the grid field to a tab in the CMS	
		return $f;
	}
	
	public function SortedChildren(){
		$staffPages = parent::Children()->sort('LastName');
		return $staffPages;
	}
	
	public function StaffTeams(){
		$teams = StaffTeam::get();
		return $teams;
	}
}
