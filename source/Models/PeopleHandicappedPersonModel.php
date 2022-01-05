<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class PeopleHandicappedPersonModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class PeopleHandicappedPersonModel extends Model
{
    /**
     * PeopleHandicappedPersonModel constructor.
     */
    public function __construct()
    {
        parent::__construct("people_handicapped_person", ["id"], ["id_people", "id_settings_type_handicapped_person",
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
	 * @param int $id_settings_type_handicapped_person
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return PeopleHandicappedPersonModel
     */
    public function bootstrap( 
		int $id_people,
		int $id_settings_type_handicapped_person,
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): PeopleHandicappedPersonModel {
        $this->id_people = $id_people;
		$this->id_settings_type_handicapped_person = $id_settings_type_handicapped_person;
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
    public function findPeopleHandicappedPerson(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}