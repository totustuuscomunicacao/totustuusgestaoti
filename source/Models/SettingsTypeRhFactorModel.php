<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class SettingsTypeRhFactorModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsTypeRhFactorModel extends Model
{
    /**
     * SettingsTypeRhFactorModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_type_rh_factor", ["id"], ["description", "initials", "standard", "id_settings_icons",
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param string $description
	 * @param string $initials
     * @param int $standard
	 * @param int $id_settings_icons
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return SettingsTypeRhFactorModel
     */
    public function bootstrap(  
		string $description, 
		string $initials,
		int $standard, 
		int $id_settings_icons,
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): SettingsTypeRhFactorModel {
        $this->description = $description; 
		$this->initials = $initials;
        $this->standard = $standard; 
		$this->id_settings_icons = $id_settings_icons;
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
    public function findSettingsTypeRhFactor(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}