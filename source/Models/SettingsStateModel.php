<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class SettingsStateModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsStateModel extends Model
{
    /**
     * SettingsStateModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_state", ["id"], ["full_name", "uf", "ibge", "id_settings_country", "ddd",
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param string $full_name
     * @param string $uf
     * @param int $ibge
     * @param int $id_settings_country
     * @param string $ddd
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return SettingsStateModel
     */
    public function bootstrap(  
		string $full_name, 
		string $uf, 
		int $ibge, 
		int $id_settings_country, 
		string $ddd, 
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): SettingsStateModel {
        $this->full_name = $full_name;
        $this->uf = $uf;
        $this->ibge = $ibge;
        $this->id_settings_country = $id_settings_country;
        $this->ddd = $ddd;
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
    public function findSettingsState(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}