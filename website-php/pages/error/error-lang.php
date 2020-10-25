<?php
/**
 * PHP file pages\error\error-lang.php
 */
/**
 * Page error-lang
 * URL: http://127.0.0.1/website-php/error/error-lang.html
 *
 * WebSite-PHP : PHP Framework 100% object (http://www.website-php.com)
 * Copyright (c) 2009-2020 WebSite-PHP.com
 * PHP versions >= 5.2
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 * 
 * @author      Emilien MOREL <admin@website-php.com>
 * @link        http://www.website-php.com
 * @copyright   WebSite-PHP.com 22/04/2020
 * @version     1.3.1
 * @access      public
 * @since       1.0.18
 */

require_once(dirname(__FILE__)."/error-template.php");

class ErrorLang extends Page {
	function __construct() {}
	
	public function Load() {
		header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
		
		parent::$PAGE_TITLE = __(ERROR_LANG)." - ".__(SITE_NAME);
		parent::$PAGE_META_ROBOTS = "noindex, nofollow";
		
		$obj_error_msg = new WSPObject(new Picture("wsp/img/warning.png", 48, 48, 0, "absmidlle"), "<br/>", new Label(__(ERROR_LANG_MSG)));
		$back_link = new Link(BASE_URL, Link::TARGET_NONE, __(SITE_NAME));
		$obj_error_msg->add("<br/><br/>", __(MAIN_PAGE_GO_BACK), $back_link, "<br/><br/>");
		
		$this->render = new ErrorTemplate($obj_error_msg, __(ERROR_LANG));
	}
}
?>
