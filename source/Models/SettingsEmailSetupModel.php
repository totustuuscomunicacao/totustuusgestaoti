<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class SettingsEmailSetupModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsEmailSetupModel extends Model
{
    /**
     * SettingsEmailSetupModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_email_setup", ["id"], ["id_entity", "conf_mail_host", "conf_mail_port", "conf_mail_user", "conf_mail_pass", "conf_mail_sender_name", "conf_mail_sender_address", "conf_mail_support", "conf_mail_option_lang", "conf_mail_option_html", "conf_mail_option_auth", "conf_mail_option_secure", "conf_mail_option_charset", "registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
	 * @param int $id_entity
	 * @param int $conf_mail_host
	 * @param string $conf_mail_port
	 * @param string $conf_mail_user
	 * @param string $conf_mail_pass
	 * @param string $conf_mail_sender_name
	 * @param string $conf_mail_sender_address
	 * @param string $conf_mail_support
	 * @param string $conf_mail_option_lang
	 * @param int $conf_mail_option_html
	 * @param int $conf_mail_option_auth
	 * @param string $conf_mail_option_secure
	 * @param string $conf_mail_option_charset
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return SettingsEmailSetupModel
     */
    public function bootstrap( 
		int $id_entity,
		int $conf_mail_host,
		string $conf_mail_port,
		string $conf_mail_user,
		string $conf_mail_pass,
		string $conf_mail_sender_name,
		string $conf_mail_sender_address,
		string $conf_mail_support,
		string $conf_mail_option_lang,
		int $conf_mail_option_html,
		int $conf_mail_option_auth,
		string $conf_mail_option_secure,
		string $conf_mail_option_charset,
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): SettingsEmailSetupModel {
		$this->id_entity = $id_entity;
		$this->conf_mail_host = $conf_mail_host;
		$this->conf_mail_port = $conf_mail_port;
		$this->conf_mail_user = $conf_mail_user;
		$this->conf_mail_pass = $conf_mail_pass;
		$this->conf_mail_sender_name = $conf_mail_sender_name;
		$this->conf_mail_sender_address = $conf_mail_sender_address;
		$this->conf_mail_support = $conf_mail_support;
		$this->conf_mail_option_lang = $conf_mail_option_lang;
		$this->conf_mail_option_html = $conf_mail_option_html;
		$this->conf_mail_option_auth = $conf_mail_option_auth;
		$this->conf_mail_option_secure = $conf_mail_option_secure;
		$this->conf_mail_option_charset = $conf_mail_option_charset;
        $this->registration_date = $registration_date; 
		$this->updated_date = $updated_date;
		$this->id_settings_type_of_situation = $id_settings_type_of_situation;
        return $this;
    }

    /**
     * @param null|string $terms
     * @param null|string $params
     * @param string $columns
     * @return mixed|Model
     */
    public function findSettingsEmailSetup(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}