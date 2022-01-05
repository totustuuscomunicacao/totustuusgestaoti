<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class SettingsTypePassportModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsTypePassportModel extends Model
{
    /**
     * SettingsTypePassportModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_type_passport", ["id"], ["description", "initials", "standard", "color",
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param string $description
	 * @param string $initials
     * @param int $standard
     * @param string $color
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return SettingsTypePassportModel
     */
    public function bootstrap(  
		string $description, 
		string $initials,
		int $standard,  
		string $color, 
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): SettingsTypePassportModel {
        $this->description = $description;
		$this->initials = $initials;
        $this->standard = $standard; 
        $this->color = $color;
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
    public function findSettingsTypePassport(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}