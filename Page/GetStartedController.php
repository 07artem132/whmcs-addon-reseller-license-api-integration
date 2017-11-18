<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 17.11.2017
 * Time: 18:14
 */

namespace LicensingAPIServiceVoice\Page;

use LicensingAPIServiceVoice\Lib\PageInterface;

class GetStartedController implements PageInterface{
	function info() {

	}

	function GetFileName() {
		return 'GetStarted.tpl';
	}

	function GetVars() {
		return [];
	}
}