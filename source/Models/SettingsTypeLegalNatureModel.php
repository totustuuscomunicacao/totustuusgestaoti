<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class SettingsTypeLegalNatureModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsTypeLegalNatureModel extends Model
{
    /**
     * SettingsTypeLegalNatureModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_type_legal_nature", ["id"], ["code", "description", "members",
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param string $code
     * @param string $description
     * @param int $members
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return SettingsTypeLegalNatureModel
     */
    public function bootstrap(  
		string $code, 
		string $description, 
		int $members, 
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): SettingsTypeLegalNatureModel {
        $this->code = $code;
        $this->description = $description;
        $this->members = $members; 
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
    public function findSettingsTypeLegalNature(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}