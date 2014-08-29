<?php
class CfoPage extends DataExtension {

	private static $db = array(
		
	);

	private static $has_one = array(
		"BackgroundImage" => "Image",
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
		if(Permission::check('ADMIN')){
			$f->addFieldToTab("Root.Main", new UploadField("BackgroundImage", "Background Image"));
		}
		$gridFieldConfig = GridFieldConfig_RelationEditor::create();
		
		$row = "SortOrder";
		$gridFieldConfig->addComponent($sort = new GridFieldSortableRows(stripslashes($row))); 

		$sort->table = 'Page_SidebarItems'; 
		$sort->parentField = 'PageID'; 
		$sort->componentField = 'SidebarItemID'; 

		$gridField = new GridField("SidebarItems", "Sidebar Items", $this->SidebarItems(), $gridFieldConfig);
		$f->addFieldToTab("Root.Sidebar", new LabelField("SidebarLabel", "<h2>Add sidebar items below</h2>"));
		$f->addFieldToTab("Root.Sidebar", new LiteralField("SidebarManageLabel", '<p><a href="admin/sidebar-items" target="_blank">View and Manage Sidebar Items &raquo;</a></p>'));
		$f->addFieldToTab("Root.Sidebar", $gridField); // add the grid field to a tab in the CMS

	}

    public function SidebarItems() {
        return $this->owner->getManyManyComponents('SidebarItems')->sort('SortOrder');
    }
	public function Calendar() {
  		return LocalistCalendar::get()->First();
  	}
	
}
