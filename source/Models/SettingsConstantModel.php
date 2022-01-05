<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class SettingsConstantModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsConstantModel extends Model
{
    /**
     * SettingsConstantModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_constant", ["id"], ["id_entity", "description", "value",
            "registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
	 * @param int $id_entity
     * @param string $description
     * @param string $value
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return SettingsConstantModel
     */
    public function bootstrap(  
		int $id_entity,
		string $description,
		string $value,
        date $registration_date,
        date $updated_date,
        int $id_settings_type_of_situation
    ): SettingsConstantModel {
		$this->id_entity = $id_entity;
        $this->description = $description; 
		$this->value = $value;
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
    public function findSettingsConstant(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}