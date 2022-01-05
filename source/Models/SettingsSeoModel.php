<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * RCCDIVINOPOLIS | Class SettingsSeoModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsSeoModel extends Model
{
    /**
     * SettingsSeoModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_seo", ["id"], ["id_entity", "conf_site_name", "conf_site_title", "conf_site_desc", 
		"conf_site_lang", "conf_site_domain", "conf_site_addr_street", "conf_site_addr_number", "conf_site_addr_complement", 
		"conf_site_addr_city", "conf_site_addr_state", "conf_site_addr_zipcode", "registration_date", "update_date", "id_type_of_situation"]);
    }

    /**
     * @param int $id_entity
     * @param string $conf_site_name
     * @param string $conf_site_title
     * @param string $conf_site_desc
     * @param string $conf_site_lang
     * @param string $conf_site_domain
     * @param string $conf_site_addr_street
     * @param string $conf_site_addr_number
     * @param string $conf_site_addr_complement
     * @param string $conf_site_addr_city
     * @param string $conf_site_addr_state
     * @param string $conf_site_addr_zipcode
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_type_of_situation
     * @return SettingsSeoModel
     */
    public function bootstrap(   
		int $id_entity,
		string $conf_site_name,
		string $conf_site_title,
		string $conf_site_desc,
		string $conf_site_lang,
		string $conf_site_domain,  
		string $conf_site_addr_street,
		string $conf_site_addr_number,
		string $conf_site_addr_complement,
		string $conf_site_addr_city,
		string $conf_site_addr_state,
		string $conf_site_addr_zipcode,
        date $registration_date,
        date $updated_date,
		int $id_type_of_situation
    ): SettingsSeoModel {   
        $this->id_entity = $id_entity;
        $this->conf_site_name = $conf_site_name;
        $this->conf_site_title = $conf_site_title;
        $this->conf_site_desc = $conf_site_desc;
        $this->conf_site_lang = $conf_site_lang;
        $this->conf_site_domain = $conf_site_domain;
        $this->conf_site_addr_street = $conf_site_addr_street;
        $this->conf_site_addr_number = $conf_site_addr_number;
        $this->conf_site_addr_complement = $conf_site_addr_complement;
        $this->conf_site_addr_city = $conf_site_addr_city;
        $this->conf_site_addr_state = $conf_site_addr_state;
        $this->conf_site_addr_zipcode = $conf_site_addr_zipcode;
		$this->registration_date = $registration_date;
		$this->updated_date = $updated_date;
        $this->id_type_of_situation = $id_type_of_situation;
        return $this;
    }

    /**
     * @param null|string $terms
     * @param null|string $params
     * @return mixed|Model
     */
    public function findSettingsSeo(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }
}