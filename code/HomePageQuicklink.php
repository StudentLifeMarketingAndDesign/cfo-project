<?php

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TreeDropdownField;
use SilverStripe\ORM\DataObject;

	class HomePageQuicklink extends DataObject {

		private static $db = array(
			"Title" => "Varchar(155)",
			"SubTitle" => "Varchar(155)",
			"Content" => "HTMLText",
			"SortOrder"=>"Int",
			"ExternalLink" => "Text",
			"UseExternalLink" => "Boolean"

		);

		private static $has_one = array (
			"AssociatedPage" => SiteTree::class,
			// "Image" => "Image"
		);

		private static $default_sort = "SortOrder";

		function getCMSFields() {
			$fields = new FieldList();

			$fields->push( new TextField( 'Title', 'Link Title' ));
			$fields->push( new TextField( 'SubTitle', 'Link Subtitle' ));

			// $fields->push( new UploadField("Image", "Image"));
			$fields->push( new TreeDropdownField("AssociatedPageID", "Link to this page", SiteTree::class));
			$fields->push( new TextField( 'ExternalLink', 'Use the external link instead:' ));
			// $fields->push( new HTMLEditorField( 'Content', 'Content' ));


			return $fields;
		}

	}