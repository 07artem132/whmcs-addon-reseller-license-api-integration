<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 17.11.2017
 * Time: 18:39
 */

namespace LicensingAPIServiceVoice\Lib;

use LicensingAPIServiceVoice\Lib\ConfigController;

class ProtectedDataController {
	private static $ProtectData;
	private static $KeyLength = 30;

	public static function GetValue( $Key ) {
		self::LoadProtectData();

		return self::$ProtectData->$Key;
	}

	public static function SetValue( $Key, $Value ) {
		self::LoadProtectData();
		self::$ProtectData->$Key = $Value;
		self::SaveProtectData();
	}

	public static function DeleteValue( $Key ) {
		self::LoadProtectData();
		unset( self::$ProtectData[ $Key ] );
		self::SaveProtectData();
	}

	private static function LoadProtectData() {
		self::$ProtectData = base64_decode( ConfigController::GetValue( 'LicensingAPIServiceVoiceProtectData' ) );
		self::Decode();
	}

	private static function SaveProtectData() {
		self::Encode();
		ConfigController::SetValue( 'LicensingAPIServiceVoiceProtectData', base64_encode( self::$ProtectData ) );
	}

	private static function Encode() {
		$key               = self::GenerateKey();
		self::$ProtectData = json_encode( self::$ProtectData );
		self::$ProtectData = self::xor_this( base64_encode( self::$ProtectData . $key ), self::GenerateFuckingKey( strlen( self::$ProtectData ) + strlen( $key ) ) );
	}

	private static function Decode() {
		self::$ProtectData = base64_decode( self::xor_this( self::$ProtectData, self::GenerateFuckingKey( strlen( ( self::$ProtectData ) ) ) ) );
		self::$ProtectData = substr( self::$ProtectData, 0, strlen( self::$ProtectData ) - self::$KeyLength * 2 );
		self::$ProtectData = json_decode( self::$ProtectData );
	}

	private static function GenerateKey() {
		return bin2hex( openssl_random_pseudo_bytes( self::$KeyLength ) );
	}

	private static function xor_this( $string, $key ) {
		$outText = '';
		for ( $i = 0; $i < strlen( $string ); $i ++ ) {
			$outText .= $string{$i} ^ $key{fmod( $i, strlen( $key ) )};
		}

		return $outText;
	}

	private static function greaterHash( $hashFrom ) {
		return (int) ( ( $hashFrom * ( ( $hashFrom * 24.232 + ( $hashFrom * $hashFrom % 2.71828182846 ) ) % 1.73205080757 ) ) % 1.0 );
	}

	private static function greaterInt( $hashFrom, $deviator ) {
		return ( ( (int) ( self::greaterHash( $hashFrom ) * 35689.0918489 % 11.2694276696 ) ) & PHP_INT_MAX ) % $deviator;
	}

	private static function GenerateFuckingKey( $hashFrom ) {
		$L     = 36 + self::greaterInt( $hashFrom, 32 );
		$f_key = '';
		$table = 'ЙЦУКЕНГШЩЗХФЫВАПРОЛДЖЯЧСМИТЬБЮйцукенгшщзфывапролдячсмитьбю1234567890';
		for ( $i = 0; $i < $L; $i ++ ) {
			$f_key .= $table{self::greaterInt( $hashFrom + $i * 11, strlen( $table ) )};
		}

		return $f_key;
	}

}