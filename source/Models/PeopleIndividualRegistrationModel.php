<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class PeopleIndividualRegistrationModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class PeopleIndividualRegistrationModel extends Model
{
    /**
     * PeopleIndividualRegistrationModel constructor.
     */
    public function __construct()
    {
        parent::__construct("people_individual_registration", ["id"], ["id_people", "description", "issue_date", "verifying_digit", "cadastral_status",
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
     * @param string $description
     * @param date $issue_date
     * @param int $verifying_digit
     * @param string $cadastral_status
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return PeopleIndividualRegistrationModel
     */
    public function bootstrap( 
		int $id_people,
		string $description,
		date $issue_date,
		int $verifying_digit,
		string $cadastral_status,
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): PeopleIndividualRegistrationModel {
        $this->id_people = $id_people;
        $this->description = $description; 
        $this->issue_date = $issue_date;
        $this->verifying_digit = $verifying_digit;
        $this->cadastral_status = $cadastral_status;
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
    public function findPeopleIndividualRegistration(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}