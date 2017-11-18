<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 13.11.2017
 * Time: 20:01
 */

namespace LicensingAPIServiceVoice\Lib;

use \WHMCS\Config\Setting;

class LicensingController {
	protected $version;
	protected $ProtectData;
	private $ClientPrivateKey;
	private $ClientPublicKey;
	private $Signature;
	private $KeyLength = 30;

	public function SetVersion( $version ) {
		$this->version = $version;
	}

	protected function GetVersion() {
		return $this->version;
	}

	protected function GetWHMCSSystemURL() {
		return Setting::getValue( 'SystemURL' );
	}

	protected function GetWHMCSCompanyName() {
		return Setting::getValue( 'CompanyName' );
	}

	protected function GetWHMCSEmail() {
		return Setting::getValue( 'Email' );
	}

	protected function GetServerIP() {
		return getHostByName( getHostName() );
	}

	protected function GetServerHostName() {
		return getHostName();
	}

	protected function GenerateUID() {
		return base64_encode( hash( 'sha512', md5( uniqid( '', true ) ) ) );
	}


	protected function GetKey() {
		return $this->ProtectData->key;
	}

	protected function VerifiKey() {
		//TODO verifi API KEY
	}



	public function ReturnProtectedData() {
		return $this->ProtectData;
	}

/*	public function greaterHash( $hashFrom ) {
		return (int) ( ( $hashFrom * ( ( $hashFrom * 24.232 + ( $hashFrom * $hashFrom % 2.71828182846 ) ) % 1.73205080757 ) ) % 1.0 );
	}
*/
	/*public function greaterInt( $hashFrom, $deviator ) {
		return ( ( (int) ( $this->greaterHash( $hashFrom ) * 35689.0918489 % 11.2694276696 ) ) & PHP_INT_MAX ) % $deviator;
	}*/
/*	public function GenerateFuckingKey( $hashFrom ) {
		$L     = 36 + $this->greaterInt( $hashFrom, 32 );
		$f_key = '';
		$table = 'ЙЦУКЕНГШЩЗХФЫВАПРОЛДЖЯЧСМИТЬБЮйцукенгшщзфывапролдячсмитьбю1234567890';
		for ( $i = 0; $i < $L; $i ++ ) {
			$f_key .= $table{$this->greaterInt( $hashFrom + $i * 11, strlen( $table ) )};
		}

		return $f_key;
	}
*/
	/*public function DecodeProtectData() {
		$this->ProtectData = base64_decode( $this->xor_this( $this->ProtectData, $this->GenerateFuckingKey( strlen( ( $this->ProtectData ) ) ) ) );
		$this->ProtectData = substr( $this->ProtectData, 0, strlen( $this->ProtectData ) - $this->KeyLength * 2 );
	}*/

	/*function xor_this( $string, $key ) {
		$outText = '';
		for ( $i = 0; $i < strlen( $string ); $i ++ ) {
			$outText .= $string{$i} ^ $key{fmod( $i, strlen( $key ) )};
		}

		return $outText;
	}*/
/*	public function EncodeProtectData() {
		$key               = $this->GenerateKey();
		$this->ProtectData = $this->xor_this( base64_encode( $this->ProtectData . $key ), $this->GenerateFuckingKey( strlen( $this->ProtectData ) + strlen( $key ) ) );
	}*/


	function ValidProtectData() {

	}

	public function GetAllowModule() {
		return [ 'sosatIsAlexandra' => true ];
	}

	function GetPublicKeyServer() {
		return ''; //todo ПОЛУЧАТЬ от сервера после передачи ему публичного ключа
	}

	function GetPublicKeyClient() {
		return '';
	}

	function GetPrivateKeyClient() {
		return '';
	}

	function CreateSignProtectData() {
		openssl_sign( $this->ProtectData, $this->Signature, $this->ClientPrivateKey, "sha1WithRSAEncryption" );
	}

	function VerifiSignProtectData() {
		if ( ! openssl_verify( $this->ProtectData, $this->Signature, $this->ClientPublicKey, OPENSSL_ALGO_SHA1 ) ) {
			die( 'invalid' );
		}
	}

	function GenerateKeyClient() {
		$this->ClientPrivateKey = openssl_pkey_new( array(
			"private_key_bits" => 2048,
			"private_key_type" => OPENSSL_KEYTYPE_RSA,
		) );

		$this->ClientPublicKey = openssl_pkey_get_public( openssl_pkey_get_details( $this->ClientPrivateKey )['key'] );
	}
}