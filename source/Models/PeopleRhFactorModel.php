<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class PeopleRhFactorModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class PeopleRhFactorModel extends Model
{
    /**
     * PeopleRhFactorModel constructor.
     */
    public function __construct()
    {
        parent::__construct("people_rh_factor", ["id"], ["id_people", "id_settings_type_rh_factor",
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
     * @param int $id_settings_type_rh_factor
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return PeopleRhFactorModel
     */
    public function bootstrap( 
		int $id_people, 
		int $id_settings_type_rh_factor,
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): PeopleRhFactorModel {
        $this->id_people = $id_people;
        $this->id_settings_type_rh_factor = $id_settings_type_rh_factor; 
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
    public function findPeopleRhFactor(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}