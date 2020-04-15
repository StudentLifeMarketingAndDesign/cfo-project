<?php

use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\Security\Permission;
use SilverStripe\Forms\GridField\GridFieldAddNewButton;
use SilverStripe\Forms\GridField\GridFieldDeleteAction;
use SilverStripe\Forms\GridField\GridField;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;
class HomePage extends Page {

	private static $db = array(

	);

	private static $has_one = array(

	);

	private static $has_many = array(

	);

	public function getCMSFields(){
		$f = parent::getCMSFields();
		$contentField = $f->dataFieldByName('Content');
		$contentField->setRows(2);
		// $f->removeByName("Content");
		$f->removeByName("BackgroundImage");
		$f->removeByName("InheritSidebarItems");
		$f->removeByName("SidebarLabel");
		$f->removeByName("SidebarItem");
		$f->removeByName("Metadata");
		$gridFieldConfig = GridFieldConfig_RecordEditor::create();
		$gridFieldConfig->addComponent(new GridFieldSortableRows('SortOrder'));

    	$gridFieldConfig2 = GridFieldConfig_RecordEditor::create();
		$gridFieldConfig2->addComponent(new GridFieldSortableRows('SortOrder'));


	    if(!Permission::check('ADMIN')){
	      $gridFieldConfig->removeComponentsByType(GridFieldAddNewButton::class);
	      $gridFieldConfig->removeComponentsByType(GridFieldDeleteAction::class);
	    }

	   $homePageQuicklink = new GridField("HomePageQuicklink", "Home Page Quick Links", HomePageQuicklink::get(), $gridFieldConfig);
	  	$carouselImageGridField = new GridField("CarouselImages", "Home Page Carousel Images", CarouselImage::get(), $gridFieldConfig2);

		$f->addFieldToTab("Root.Main", $homePageQuicklink);
	    $f->addFieldToTab("Root.Main", $carouselImageGridField);


		return $f;
	}
}
