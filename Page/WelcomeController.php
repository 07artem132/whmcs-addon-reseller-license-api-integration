<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 15.11.2017
 * Time: 22:37
 */

namespace LicensingAPIServiceVoice\Page;

use LicensingAPIServiceVoice\Lib\PageInterface;

class WelcomeController implements PageInterface {
	function GetFileName() {
		return 'Welcome.tpl';
	}

	function GetVars() {
		return [ 'test' => 'testic' ];
	}
}