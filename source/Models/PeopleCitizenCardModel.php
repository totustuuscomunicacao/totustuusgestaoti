<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class PeopleCitizenCardModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class PeopleCitizenCardModel extends Model
{
    /**
     * PeopleCitizenCardModel constructor.
     */
    public function __construct()
    {
        parent::__construct("people_citizen_card", ["id"], ["id_people", "description", "issue_date", "verifying_digit", 
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
     * @param string $description
     * @param date $issue_date
     * @param int $verifying_digit
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return PeopleCitizenCardModel
     */
    public function bootstrap( 
		int $id_people,
		string $description,
		date $issue_date,
		int $verifying_digit,
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): PeopleCitizenCardModel {
        $this->id_people = $id_people;
        $this->description = $description; 
        $this->issue_date = $issue_date;
        $this->verifying_digit = $verifying_digit;
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
    public function findPeopleCitizenCard(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}