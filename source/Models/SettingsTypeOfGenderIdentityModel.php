<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class SettingsTypeOfGenderIdentityModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsTypeOfGenderIdentityModel extends Model
{
    /**
     * SettingsTypeOfGenderIdentityModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_type_of_gender_identity", ["id"], ["description", "details", "standard",
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param string $description
	 * @param string $details
     * @param int $standard
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return SettingsTypeOfGenderIdentityModel
     */
    public function bootstrap(  
		string $description, 
		string $details,
		int $standard, 
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): SettingsTypeOfGenderIdentityModel {
        $this->description = $description; 
		$this->details = $details;
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
    public function findSettingsTypeOfGenderIdentity(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}