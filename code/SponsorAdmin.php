<?php
class SponsorAdmin extends ModelAdmin {

  private static $managed_models = array('Sponsor'); 
  private static $url_segment = 'sponsors';
  private static $menu_title = 'Sponsors';
  //private static $menu_icon = 'themes/tutor/images/pencil.png';
  public $showImportForm = false; 
  
}
