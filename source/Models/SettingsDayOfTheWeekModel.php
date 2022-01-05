<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * RCCDIVINOPOLIS | Class SettingsDayOfTheWeekModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsDayOfTheWeekModel extends Model
{
    /**
     * SettingsDayOfTheWeekModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_day_of_the_week", ["id"], ["description", "pattern", "registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param string $description
     * @param int $pattern
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return SettingsDayOfTheWeekModel
     */
    public function bootstrap(   
		string $description,
		int $pattern,
        date $registration_date,
        date $updated_date,
		int $id_settings_type_of_situation
    ): SettingsDayOfTheWeekModel {
        $this->description = $description;  
		$this->pattern = $pattern;
		$this->registration_date = $registration_date;
		$this->updated_date = $updated_date;
        $this->id_settings_type_of_situation = $id_settings_type_of_situation;
        return $this;
    }

    /**
     * @param null|string $terms
     * @param null|string $params
     * @return mixed|Model
     */
    public function findSettingsDayOfTheWeek(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }
}