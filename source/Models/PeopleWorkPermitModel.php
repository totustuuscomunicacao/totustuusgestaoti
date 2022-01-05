<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class PeopleWorkPermitModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class PeopleWorkPermitModel extends Model
{
    /**
     * PeopleWorkPermitModel constructor.
     */
    public function __construct()
    {
        parent::__construct("people_work_permit", ["id"], ["id_people", "description", "series", "id_settings_state", "issue_date", 
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
     * @param string $description
     * @param string $series
     * @param int $id_settings_state
     * @param date $issue_date
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return PeopleWorkPermitModel
     */
    public function bootstrap( 
		int $id_people,
		string $description,
		string $series,
		int $id_settings_state,
		date $issue_date,
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): PeopleWorkPermitModel {
        $this->id_people = $id_people;
        $this->description = $description; 
        $this->series = $series; 
        $this->id_settings_state = $id_settings_state; 
        $this->issue_date = $issue_date;
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
    public function findPeopleWorkPermit(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}