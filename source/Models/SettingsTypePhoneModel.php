<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class SettingsTypePhoneModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsTypePhoneModel extends Model
{
    /**
     * SettingsTypePhoneModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_type_phone", ["id"], ["description", "standard",
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param string $description
     * @param int $standard
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return SettingsTypePhoneModel
     */
    public function bootstrap(  
		string $description, 
		int $standard,
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): SettingsTypePhoneModel {
        $this->description = $description;
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
    public function findSettingsTypePhone(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}