<?php
/**
 * PHP file wsp\class\abstract\display\AbstractPage.class.php
 * @package abstract
 * @subpackage display
 */
/**
 * Abstract Class AbstractPage
 *
 * WebSite-PHP : PHP Framework 100% object (http://www.website-php.com)
 * Copyright (c) 2009-2020 WebSite-PHP.com
 * PHP versions >= 5.2
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 * 
 * @package abstract
 * @subpackage display
 * @author      Emilien MOREL <admin@website-php.com>
 * @link        http://www.website-php.com
 * @copyright   WebSite-PHP.com 22/04/2020
 * @version     1.3.1
 * @access      public
 * @since       1.2.2
 */

abstract class AbstractPage {
    public function InitializeComponent() {}
    public function Load() {}
    public function Loaded() {}
}
?>
