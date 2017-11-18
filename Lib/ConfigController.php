<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 15.11.2017
 * Time: 22:24
 */

namespace LicensingAPIServiceVoice\Lib;

use \WHMCS\Config\Setting;

class ConfigController {

	static function GetInstallStatus() {
		( Setting::getValue( 'LicensingAPIServiceVoice_install_status' ) ) ? $status = false : $status = true;

		return $status;
	}

	static function SetInstallStatus( $status ) {
		Setting::setValue( 'LicensingAPIServiceVoice_install_status', $status );
	}

	static function SetValue( $Key, $Value ) {
		Setting::setValue( $Key, $Value );
	}

	static function GetValue( $Key ) {
		return Setting::getValue( $Key );
	}
}