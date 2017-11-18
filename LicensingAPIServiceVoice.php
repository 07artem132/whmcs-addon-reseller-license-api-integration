<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 12.11.2017
 * Time: 22:35
 */

require __DIR__ . '/vendor/autoload.php';

//use LicensingAPIServiceVoice\Lib\LicensingController;
use LicensingAPIServiceVoice\Lib\PageController;
use LicensingAPIServiceVoice\Lib\ConfigController;

function LicensingAPIServiceVoice_config() {
	$configarray = [
		"name"        => "Licensing API service-voice",
		"description" => "",
		"version"     => "0.1",
		"author"      => "service-voice",
		"fields"      => [

		]
	];

	return $configarray;
}


function LicensingAPIServiceVoice_output( $vars ) {
	try {
		$PageController = new PageController();
		$PageController->SetVar( 'basheURL', $vars['modulelink'] );

		if ( isset( $_GET['page'] ) && ! empty( $_GET['page'] ) ) {
			return $PageController->BildPage( $_GET['page'] );
		}

		if ( ConfigController::GetInstallStatus() ) {
			return $PageController->BildPage( 'welcome' );
		} else {
			return $PageController->BildPage( 'dashboard' );
		}

	} catch ( \Exception $e ) {
		echo $e->getMessage();
	}
}