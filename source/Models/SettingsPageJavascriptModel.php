<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * RCCDIVINOPOLIS | Class SettingsPageJavascriptModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsPageJavascriptModel extends Model
{
    /**
     * SettingsPageJavascriptModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_page_javascript", ["id"], ["id_settings_page", "description", "url", 
		"registration_date", "updated_date", "id_type_of_situation"]);
    }

    /**
     * @param int $id_settings_page
     * @param string $description
     * @param string $url
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_type_of_situation
     * @return SettingsPageJavascriptModel
     */
    public function bootstrap(   
		int $id_settings_page,  
		string $description,  
		string $url,
        date $registration_date,
        date $updated_date,
		int $id_type_of_situation
    ): SettingsPageJavascriptModel {   
        $this->id_settings_page = $id_settings_page;  
        $this->id_modules = $id_modules;    
        $this->url = $url;   
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
    public function findSettingsPageJavascript(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }
}