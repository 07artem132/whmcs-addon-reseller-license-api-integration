<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 17.11.2017
 * Time: 17:15
 */

namespace LicensingAPIServiceVoice\Page;

use LicensingAPIServiceVoice\Lib\PageInterface;
use LicensingAPIServiceVoice\Lib\ServiceVoiceLicensingApiController as ApiSVLicensing;
use LicensingAPIServiceVoice\Lib\ProtectedDataController;
use LicensingAPIServiceVoice\Lib\ConfigController as ConfigModule;

class LoginController implements PageInterface {

	function GetFileName() {
		return 'Login.tpl';
	}

	function GetVars() {
		return [];
	}

	function Login() {
		if ( ! empty( $_POST['email'] ) && ! empty( $_POST['password'] ) ) {
			$data = ApiSVLicensing::VerifiAccount( $_POST['email'], $_POST['password'] )['data'];
			ConfigModule::SetInstallStatus( true );

			ConfigModule::SetValue( 'LicensingAPIServiceVoiceProtectData', null );

			ProtectedDataController::SetValue( 'allow_module', $data['allow_module'] );
			ProtectedDataController::SetValue( 'expires_data_valid', $data['expires_data_valid'] );

			$this->RedirectToGetStarted();
		}
	}

	function RedirectToGetStarted() {
		header('Location: ?module=LicensingAPIServiceVoice&page=getstarted');
	}
}