<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class SettingsTypeMainEconomicActivityModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsTypeMainEconomicActivityModel extends Model
{
    /**
     * SettingsTypeMainEconomicActivityModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_type_main_economic_activity", ["id"], ["id_people", "description", 
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
	 * @param string $description
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return SettingsTypeMainEconomicActivityModel
     */
    public function bootstrap( 
		int $id_people,
		string $description,
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): SettingsTypeMainEconomicActivityModel {
        $this->id_people = $id_people;
		$this->description = $description;
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
    public function findSettingsTypeMainEconomicActivity(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}