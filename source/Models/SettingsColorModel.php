<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class SettingsColorModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsColorModel extends Model
{
    /**
     * SettingsColorModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_color", ["id"], ["root_name", "root_color",
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
	 * @param string $root_name
	 * @param string $root_color
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return SettingsColorModel
     */
    public function bootstrap( 
		string $root_name,
		string $root_color,
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): SettingsColorModel {
		$this->root_name = $root_name;
		$this->root_color = $root_color;
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
    public function findSettingsColor(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}