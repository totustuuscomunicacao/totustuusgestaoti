<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class SettingsCnaeGroupModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsCnaeGroupModel extends Model
{
    /**
     * SettingsCnaeGroupModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_cnae_group", ["id"], ["id_settings_cnae_division", "title", "description", 
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_settings_cnae_division
	 * @param string $title
	 * @param string $description
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return SettingsCnaeGroupModel
     */
    public function bootstrap( 
		int $id_settings_cnae_division,
		string $title,
		string $description,
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): SettingsCnaeGroupModel {
        $this->id_settings_cnae_division = $id_settings_cnae_division;
		$this->title = $title;
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
    public function findSettingsCnaeGroup(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}