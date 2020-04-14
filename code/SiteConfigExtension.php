<?php

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;


class SiteConfigExtension extends DataExtension {

 private static $db = array(
	'TwitterLink' => 'Text',
	'Address' =>'Text',
	'PhoneNumber' =>'Text',
	'FacebookLink' =>'Text',
	'GroupSummary'=>'HTMLText',
	'EmailAddress' => 'Text',
	'VimeoLink' => 'Text',
	'YouTubeLink' => 'Text',
	'InstagramLink' => 'Text'
	);

  private static $has_one = array(

  );

  public function updateCMSFields(FieldList $fields){

	  $fields->addFieldToTab('Root.Main', new HTMLEditorField('GroupSummary', 'Group Summary'));

	  $fields->addFieldToTab('Root.Main', new TextareaField('Address', 'Organization Address'));
	  $fields->addFieldToTab('Root.Main', new TextareaField('PhoneNumber', 'Phone Number(s)'));
	  $fields->addFieldToTab('Root.Main', new TextareaField('EmailAddress', 'Email Address'));

	  $fields->addFieldToTab('Root.Main', new TextField('TwitterLink', 'Twitter Account URL'));
	  $fields->addFieldToTab('Root.Main', new TextField('FacebookLink', 'Facebook Account URL'));
	  $fields->addFieldToTab('Root.Main', new TextField('VimeoLink', 'Vimeo Account URL'));
	  $fields->addFieldToTab('Root.Main', new TextField('YouTubeLink', 'YouTube Account URL'));
	  $fields->addFieldToTab('Root.Main', new TextField('InstagramLink', 'Instagram Account URL'));



	  return $fields;
  }

}
