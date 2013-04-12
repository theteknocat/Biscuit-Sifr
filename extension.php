<?php
/**
 * Extension for easy inclusion of Lightview JS and CSS files, with the ability to turn it on and off in the database and assign it to specific pages if desired.
 *
 * @package Extensions
 * @subpackage Sifr
 * @author Peter Epp
 * @copyright Copyright (c) 2009 Peter Epp (http://teknocat.org)
 * @license GNU Lesser General Public License (http://www.gnu.org/licenses/lgpl.html)
 * @version 2.0 $Id: extension.php 13982 2011-08-08 18:51:55Z teknocat $
 **/
class Sifr extends AbstractExtension {
	protected $_dependencies = array("FlashPlayer");
	function run() {
		$this->register_js('footer','vendor/sIFR-2.0.7/sifr.js');
		$this->register_js('footer','sifr-init.js');
		$this->register_css(array('filename' => 'sIFR-screen.css', 'media' => 'screen'));
		$this->register_css(array('filename' => 'sIFR-print.css', 'media' => 'print'));
	}
}
?>
