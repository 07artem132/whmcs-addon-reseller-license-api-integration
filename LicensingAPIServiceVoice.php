<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 12.11.2017
 * Time: 22:35
 */

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


function LicensingAPIServiceVoice_output($vars) {
	$modulelink = $vars['modulelink'];
	$version = $vars['version'];
	$LANG = $vars['_lang'];

}
