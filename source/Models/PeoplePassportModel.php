<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class PeoplePassportModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class PeoplePassportModel extends Model
{
    /**
     * PeoplePassportModel constructor.
     */
    public function __construct()
    {
        parent::__construct("people_passport", ["id"], ["id_people", "description", "id_settings_type_passport", "personal", "issue_date", "expiration_date", "authority",
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
     * @param string $description
	 * @param int $id_settings_type_passport
     * @param string $personal
     * @param date $issue_date
     * @param date $expiration_date
	 * @param string $authority
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return PeoplePassportModel
     */
    public function bootstrap( 
		int $id_people,
		string $description,
		int $id_settings_type_passport,
		string $personal,
		date $issue_date,
		date $expiration_date,
		string $authority,
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): PeoplePassportModel {
        $this->id_people = $id_people;
        $this->description = $description; 
        $this->id_settings_type_passport = $id_settings_type_passport;
        $this->personal = $personal; 
        $this->issue_date = $issue_date;
        $this->expiration_date = $expiration_date; 
        $this->authority = $authority;
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
    public function findPeoplePassport(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}