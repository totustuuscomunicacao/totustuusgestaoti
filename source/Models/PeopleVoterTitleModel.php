<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class PeopleVoterTitleModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class PeopleVoterTitleModel extends Model
{
    /**
     * PeopleVoterTitleModel constructor.
     */
    public function __construct()
    {
        parent::__construct("people_voter_title", ["id"], ["id_people", "registration_number", "electoral_zone", "electoral_section", "biometric_identification", "issue_date", "id_settings_city",
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
     * @param string $registration_number
	 * @param string $electoral_zone
     * @param string $electoral_section
     * @param int $biometric_identification
     * @param date $issue_date
     * @param int $id_settings_city
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return PeopleVoterTitleModel
     */
    public function bootstrap( 
		int $id_people,
		string $registration_number,
		string $electoral_zone,
		string $electoral_section,
		int $biometric_identification,,
		date $issue_date,
		int $id_settings_city,
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): PeopleVoterTitleModel {
        $this->id_people = $id_people;
        $this->registration_number = $registration_number; 
        $this->electoral_zone = $electoral_zone;
        $this->electoral_section = $electoral_section;
        $this->biometric_identification = $biometric_identification;
        $this->issue_date = $issue_date;
        $this->id_settings_city = $id_settings_city; 
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
    public function findPeopleVoterTitle(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}