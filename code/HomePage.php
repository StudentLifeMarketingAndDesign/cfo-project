<?php
class HomePage extends Page {

	private static $db = array(

	);

	private static $has_one = array(

	);

	private static $has_many = array(
		'BackgroundFeatures' => 'HomePageBackgroundFeature',
	);

	public function getCMSFields(){
		$f = parent::getCMSFields();

		// $f->removeByName("Content");
		$f->removeByName("BackgroundImage");
		$f->removeByName("InheritSidebarItems");
		$f->removeByName("SidebarLabel");
		$f->removeByName("SidebarItem");

		$gridFieldConfig = GridFieldConfig_RecordEditor::create();
		$gridFieldConfig->addComponent(new GridFieldSortableRows('SortOrder'));

    	$gridFieldConfig2 = GridFieldConfig_RecordEditor::create();
		$gridFieldConfig2->addComponent(new GridFieldSortableRows('SortOrder'));


	    if(!Permission::check('ADMIN')){
	      $gridFieldConfig->removeComponentsByType('GridFieldAddNewButton');
	      $gridFieldConfig->removeComponentsByType('GridFieldDeleteAction');
	    }

		$homePageBackgroundFeatureGridField = new GridField('BackgroundFeatures', 'Background Features', $this->BackgroundFeatures(), GridFieldConfig_RelationEditor::create());
	    $homePageQuicklink = new GridField("HomePageQuicklink", "Home Page Quick Links", HomePageQuicklink::get(), $gridFieldConfig);
	  	$carouselImageGridField = new GridField("CarouselImages", "Home Page Carousel Images", CarouselImage::get(), $gridFieldConfig2);

	  	if(Permission::check('ADMIN')){
			$f->addFieldToTab("Root.Main", $homePageBackgroundFeatureGridField);
		}

		$f->addFieldToTab("Root.Main", $homePageQuicklink);
	    $f->addFieldToTab("Root.Main", $carouselImageGridField);


		return $f;
	}
}
class HomePage_Controller extends Page_Controller {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	private static $allowed_actions = array (
	);

	public function init() {
		parent::init();

	}
	public function index(){
		$page = $this->customise(array(
			'BackgroundFeature' => HomePageBackgroundFeature::get()->Sort('RAND()')->First()
		));

		return $page->renderWith(array('HomePage','Page'));
	}
	public function CarouselImages() {
		$features = CarouselImage::get();

		return $features;

	}

	public function HomePageQuicklinks() {
		$features = HomePageQuicklink::get();

		return $features;

	}

	public function RandomStaffMembers($limit = 3){
		$staffPages = StaffPage::get()->Sort('RAND()')->Limit($limit);
		return $staffPages;
	}

}