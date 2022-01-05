<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class PeopleNationalHealthCardModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class PeopleNationalHealthCardModel extends Model
{
    /**
     * PeopleNationalHealthCardModel constructor.
     */
    public function __construct()
    {
        parent::__construct("people_national_health_card", ["id"], ["id_people", "description", "medical_record", "family_health_strategy", "issue_date", 
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
     * @param string $description
     * @param string $medical_record
     * @param string $family_health_strategy
     * @param date $issue_date
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return PeopleNationalHealthCardModel
     */
    public function bootstrap( 
		int $id_people,
		string $description,
		string $medical_record,
		string $family_health_strategy,
		date $issue_date,
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): PeopleNationalHealthCardModel {
        $this->id_people = $id_people;
        $this->description = $description; 
        $this->medical_record = $medical_record; 
        $this->family_health_strategy = $family_health_strategy; 
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
    public function findPeopleNationalHealthCard(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}