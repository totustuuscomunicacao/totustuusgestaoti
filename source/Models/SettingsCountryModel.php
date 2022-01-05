<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class SettingsCountryModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsCountryModel extends Model
{
    /**
     * SettingsCountryModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_country", ["id"], ["ddi", "iso", "iso3", "full_name", "fantasy_name", "icon",
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $ddi
     * @param string $iso
     * @param string $iso3
     * @param string $full_name
     * @param string $fantasy_name
     * @param string $icon
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return SettingsCountryModel
     */
    public function bootstrap(  
		int $ddi, 
		string $iso, 
		string $iso3, 
		string $full_name, 
		string $fantasy_name, 
		string $icon, 
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): SettingsCountryModel {
        $this->ddi = $ddi;
        $this->iso = $iso;
        $this->iso3 = $iso3;
        $this->full_name = $full_name;
        $this->fantasy_name = $fantasy_name;
        $this->icon = $icon;
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
    public function findSettingsCountry(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}