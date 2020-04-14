<?php

use SilverStripe\Assets\Image;
use SilverStripe\Assets\File;
use SilverStripe\Forms\FieldList;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\ORM\FieldType\DBDate;
use SilverStripe\ORM\DataExtension;

class BlogFieldExtension extends DataExtension {

    private static $db = array(

    );

    private static $has_one = array(
        'Image' => Image::class,
        'AudioClip' => File::class
    );

    public function getCMSFields() {
      $this->extend('updateCMSFields', $fields);

      return $fields;
    }


    public function updateCMSFields(FieldList $fields) {

      $fields->addFieldToTab('Root.Main', new UploadField( 'AudioClip', 'Audio Clip'),'Content');

      $authors = StaffPage::get();
      $authorDropdown = new DropdownField('StaffPageID', 'Author (if not listed, use the field below)', $authors->Map());
      $authorDropdown->setEmptyString('No associated staff member');

      $fields->addFieldToTab('Root.Main', $authorDropdown, 'Author');

      // remove
      $fields->removeByName("StoryByEmail");
      $fields->removeByName("StoryByTitle");
      $fields->removeByName("StoryByDept");
      $fields->removeByName("PhotosByEmail");
      $fields->removeByName("ExternalURL");
      $fields->removeByName("PhotosBy");
      $fields->removeByName("StoryBy");

      if($this->owner->ClassName == "BlogEntry"){
        //$fields->removeByName("Date");
      }else {
        $fields->renameField(DBDate::class, "Published Date");
      }

  }



}