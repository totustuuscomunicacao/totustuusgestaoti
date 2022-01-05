<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class PeopleModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class PeopleModel extends Model
{
    /**
     * PeopleModel constructor.
     */
    public function __construct()
    {
        parent::__construct("people", ["id"], ["full_name", "fantasy_name", "id_settings_type_of_gender_identity", "id_settings_type_kind_of_person", "id_settings_type_of_registration", "id_settings_city", "id_settings_country", 
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param string $full_name
     * @param string $fantasy_name
     * @param int $id_settings_type_of_gender_identity
     * @param int $id_settings_type_kind_of_person
     * @param int $id_settings_type_of_registration
     * @param int $id_settings_city
     * @param int $id_settings_country
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return PeopleModel
     */
    public function bootstrap(  
		string $full_name, 
		string $fantasy_name, 
		int $id_settings_type_of_gender_identity, 
		int $id_settings_type_kind_of_person, 
		int $id_settings_type_of_registration, 
		int $id_settings_city, 
		int $id_settings_country, 
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): PeopleModel {
        $this->full_name = $full_name;
        $this->fantasy_name = $fantasy_name;
        $this->id_settings_type_of_gender_identity = $id_settings_type_of_gender_identity;
        $this->id_settings_type_kind_of_person = $id_settings_type_kind_of_person;
        $this->id_settings_type_of_registration = $id_settings_type_of_registration;
        $this->id_settings_city = $id_settings_city;
        $this->id_settings_country = $id_settings_country;
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
    public function findPeople(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}