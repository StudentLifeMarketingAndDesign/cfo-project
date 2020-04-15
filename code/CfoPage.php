<?php

use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\GridField\GridFieldConfig_RelationEditor;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\LabelField;
use SilverStripe\Forms\LiteralField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\ORM\DataExtension;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;
class CfoPage extends DataExtension {

	private static $db = array(
		'OgTitle' => 'Text',
		'OgDescription' => 'Text',
	);

	private static $has_one = array(
		'OgImage' => Image::class
	);


	private static $many_many = array (
		"SidebarItems" => "SidebarItem"
	);

    private static $many_many_extraFields=array(
        'SidebarItems'=>array(
            'SortOrder'=>'Int'
        )
    );



    private static $plural_name = "Pages";

	private static $defaults = array (

	);


public function updateCMSFields(FieldList $f) {

		// $gridFieldConfig = GridFieldConfig_RelationEditor::create();

		// $row = "SortOrder";
		// $gridFieldConfig->addComponent($sort = new GridFieldSortableRows(stripslashes($row)));

		// $sort->table = 'Page_SidebarItems';
		// $sort->parentField = 'PageID';
		// $sort->componentField = 'SidebarItemID';

		// $gridField = new GridField("SidebarItems", "Sidebar Items", $this->SidebarItems(), $gridFieldConfig);
		// $f->addFieldToTab("Root.Sidebar", new LabelField("SidebarLabel", "<h2>Add sidebar items below</h2>"));
		// $f->addFieldToTab("Root.Sidebar", new LiteralField("SidebarManageLabel", '<p><a href="admin/sidebar-items" target="_blank">View and Manage Sidebar Items &raquo;</a></p>'));

		$f->addFieldToTab("Root.SocialMediaSettings", new UploadField('OgImage', 'Social Share Image'));
		$f->addFieldToTab('Root.SocialMediaSettings', new TextField('OgTitle', 'Social Share Title'));
		$f->addFieldToTab('Root.SocialMediaSettings', new TextareaField('OgDescription', 'Social Share Description'));

		//disabling sidebar until we can do something different with the cfo-theme.
		// $f->addFieldToTab("Root.Sidebar", $gridField); // add the grid field to a tab in the CMS

	}

    public function SidebarItems() {
        return $this->owner->getManyManyComponents('SidebarItems')->sort('SortOrder');
    }
	public function Calendar() {
  		return LocalistCalendar::get()->First();
  	}

}
