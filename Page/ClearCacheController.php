<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 17.11.2017
 * Time: 20:46
 */

namespace LicensingAPIServiceVoice\Page;

use LicensingAPIServiceVoice\Lib\PageInterface;
use LicensingAPIServiceVoice\Lib\ConfigController as ConfigModule;

class ClearCacheController implements PageInterface {

	function Clear() {
		ConfigModule::SetValue( 'LicensingAPIServiceVoiceProtectData', null );
		ConfigModule::SetInstallStatus( false );
	}

	function GetFileName() {
		return 'ClearCache.tpl';
	}

	function GetVars() {
		return [];
	}

}