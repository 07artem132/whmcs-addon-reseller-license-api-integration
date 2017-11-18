<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 17.11.2017
 * Time: 17:46
 */

namespace LicensingAPIServiceVoice\Lib;


class ServiceVoiceLicensingApiController {

	public static function VerifiAccount( $email, $passwd ) {
		return [
			'status' => 'success',
			'data'   => [
				'allow_module'       => [
					'TelegramNotifications'       => [
						'title'          => 'Интеграция уведомлений с Telegram',
						'descriptions'   => '',
						'doc_url'        => '',
						'actual_version' => '',
						'download_link'  => '',
						'allow_ip'       => '127.0.0.1',
						'allow_hostname' => 'billing.dev.service-voice.com',
						'allow_path'     => '/var/www/html/modules/notifications/Telegram',
						'expires'        => 1516118080,
						'status'         => 1,
						'telemetry'      => 0,
					],
					'VkNotifications'             => [
						'title'          => 'Интеграция уведомлений с VK',
						'descriptions'   => '',
						'doc_url'        => '',
						'actual_version' => '',
						'download_link'  => '',
						'allow_ip'       => '127.0.0.1',
						'allow_hostname' => 'billing.dev.service-voice.com',
						'allow_path'     => '/var/www/html/modules/notifications/Telegram',
						'expires'        => 1516118080,
						'status'         => 1,
						'telemetry'      => 0,
					],
					'VkRegistrationAuthorization' => [
						'title'          => 'Регистрация и авторизация через VK',
						'descriptions'   => '',
						'doc_url'        => '',
						'actual_version' => '',
						'download_link'  => '',
						'allow_ip'       => '127.0.0.1',
						'allow_hostname' => 'billing.dev.service-voice.com',
						'allow_path'     => '/var/www/html/modules/notifications/Telegram',
						'expires'        => 1516118080,
						'status'         => 1,
						'telemetry'      => 0,
					],
					'JivoSiteIntegration'         => [
						'title'          => 'Интеграция с JivoSite',
						'descriptions'   => '',
						'doc_url'        => '',
						'actual_version' => '',
						'download_link'  => '',
						'allow_ip'       => '127.0.0.1',
						'allow_hostname' => 'billing.dev.service-voice.com',
						'allow_path'     => '/var/www/html/modules/notifications/Telegram',
						'expires'        => 1516118080,
						'status'         => 1,
						'telemetry'      => 0,
					],
					'PaymentPublic'               => [
						'title'          => 'Публичная оплата счетов',
						'descriptions'   => '',
						'doc_url'        => '',
						'actual_version' => '',
						'download_link'  => '',
						'allow_ip'       => '127.0.0.1',
						'allow_hostname' => 'billing.dev.service-voice.com',
						'allow_path'     => '/var/www/html/modules/notifications/Telegram',
						'expires'        => 1516118080,
						'status'         => 1,
						'telemetry'      => 0,
					],
					'ResellingModule'             => [
						'title'          => 'Реселлинг TeamSpeak 3 серверов',
						'descriptions'   => '',
						'doc_url'        => '',
						'actual_version' => '',
						'download_link'  => '',
						'allow_ip'       => '127.0.0.1',
						'allow_hostname' => 'billing.dev.service-voice.com',
						'allow_path'     => '/var/www/html/modules/notifications/Telegram',
						'expires'        => 1516118080,
						'status'         => 1,
						'telemetry'      => 0,
					],
					'RenewalControlClientArea'    => [
						'title'          => 'Контроль продления из клиентской части',
						'descriptions'   => '',
						'doc_url'        => '',
						'actual_version' => '',
						'download_link'  => '',
						'allow_ip'       => '127.0.0.1',
						'allow_hostname' => 'billing.dev.service-voice.com',
						'allow_path'     => '/var/www/html/modules/notifications/Telegram',
						'expires'        => 1516118080,
						'status'         => 1,
						'telemetry'      => 0,
					],
					'TeamSpeakDomainReselling'    => [
						'title'          => 'Реселлинг TeamSpeak 3 доменов',
						'descriptions'   => '',
						'doc_url'        => '',
						'actual_version' => '',
						'download_link'  => '',
						'allow_ip'       => '127.0.0.1',
						'allow_hostname' => 'billing.dev.service-voice.com',
						'allow_path'     => '/var/www/html/modules/notifications/Telegram',
						'expires'        => 1516118080,
						'status'         => 1,
						'telemetry'      => 0,
					],
					'TeamSpeakDomainAutoCreate'   => [
						'title'          => 'Авто создание TeamSpeak 3 доменов',
						'descriptions'   => '',
						'doc_url'        => '',
						'actual_version' => '',
						'download_link'  => '',
						'allow_ip'       => '127.0.0.1',
						'allow_hostname' => 'billing.dev.service-voice.com',
						'allow_path'     => '/var/www/html/modules/notifications/Telegram',
						'expires'        => 1516118080,
						'status'         => 1,
						'telemetry'      => 0,
					],
					'TeamSpeakModuleProvision'    => [
						'title'          => 'Авто создание TeamSpeak 3 виртуальных серверов',
						'descriptions'   => '',
						'doc_url'        => '',
						'actual_version' => '',
						'download_link'  => '',
						'allow_ip'       => '127.0.0.1',
						'allow_hostname' => 'billing.dev.service-voice.com',
						'allow_path'     => '/var/www/html/modules/notifications/Telegram',
						'expires'        => 1516118080,
						'status'         => 1,
						'telemetry'      => 0,
					]
				],
				'expires_data_valid' => 1516118080,
			]
		];
	}
}