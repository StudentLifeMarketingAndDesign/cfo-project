<?php

	class CarouselImage extends DataObject {

		private static $db = array(
			"Title" => "Varchar(155)",
			"Content" => "HTMLText",
			"YouTubeEmbed" => "HTMLText",
			"SortOrder"=> "Int",
			"ExternalLink" => "Text"

		);

		private static $has_one = array (
			"AssociatedPage" => "SiteTree",
			"Image" => "Image"
		);

		private static $default_sort = "SortOrder";

		function getCMSFields() {
			$fields = new FieldList();

			$fields->push( new TextField( 'Title', 'Title' ));

			$fields->push( new TreeDropdownField("AssociatedPageID", "Link to this page", "SiteTree"));

			$fields->push( new TextField("ExternalLink", "Use this external link instead of the selected page"));
			// $fields->push( new HTMLEditorField( 'Content', 'Content' ));

			$fields->push( new UploadField("Image", "Image"));
			$fields->push( new TextareaField( "YouTubeEmbed", "Use a video iframe embed code instead of an image:"));

			return $fields;
		}

	}