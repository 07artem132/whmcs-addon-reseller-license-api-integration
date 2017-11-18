<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 17.11.2017
 * Time: 18:18
 */

namespace LicensingAPIServiceVoice\Page;

use LicensingAPIServiceVoice\Lib\PageInterface;
use LicensingAPIServiceVoice\Lib\ProtectedDataController;

class DashboardController implements PageInterface {
	private $vars;

	function LicensingInfo() {
		$this->vars['allow_module'] = ProtectedDataController::GetValue( 'allow_module' );
	}

	function GetFileName() {
		return 'Dashboard.tpl';
	}

	function GetVars() {
		return $this->vars;
	}

}