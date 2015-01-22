<?php
class SponsorAdmin extends ModelAdmin {

	private static $managed_models = array('Sponsor'); 
	private static $url_segment = 'sponsors';
	private static $menu_title = 'Sponsors';
	//private static $menu_icon = 'themes/tutor/images/pencil.png';
	public $showImportForm = false; 
  
	public function getEditForm($id = null, $fields = null) {
		$form=parent::getEditForm($id, $fields);
	
	    //This check is simply to ensure you are on the managed model you want adjust accordingly
	    if ($this->modelClass=='Sponsor' && $gridField=$form->Fields()->dataFieldByName($this->sanitiseClassName($this->modelClass))) {
	        //This is just a precaution to ensure we got a GridField from dataFieldByName() which you should have
	        if($gridField instanceof GridField) {
	            $gridField->getConfig()->addComponent(new GridFieldSortableRows('SortOrder'));
	        }
	    }
	
	    return $form;
	}
}
