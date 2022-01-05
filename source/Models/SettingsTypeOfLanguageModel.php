<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class SettingsTypeOfLanguageModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsTypeOfLanguageModel extends Model
{
    /**
     * SettingsTypeOfLanguageModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_type_of_language", ["id"], ["description", "id_settings_country", "lang", "standard", 
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param string $description
     * @param int $id_settings_country
     * @param string $lang
     * @param int $standard
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return SettingsTypeOfLanguageModel
     */
    public function bootstrap(  
		string $description, 
		int $id_settings_country, 
		string $lang, 
		int $standard, 
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): SettingsTypeOfLanguageModel {
        $this->description = $description;
        $this->id_settings_country = $id_settings_country;
        $this->lang = $lang;
        $this->standard = $standard;
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
    public function findSettingsTypeOfLanguage(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}