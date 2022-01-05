<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class PeopleEmailModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class PeopleEmailModel extends Model
{
    /**
     * PeopleEmailModel constructor.
     */
    public function __construct()
    {
        parent::__construct("people_email", ["id"], ["id_people",  "description", "id_settings_type_email",  
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
     * @param string $description
     * @param int $id_settings_type_email
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return PeopleEmailModel
     */
    public function bootstrap( 
		int $id_people, 
		string $description, 
		int $id_settings_type_email, 
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): PeopleEmailModel {
        $this->id_people = $id_people;
        $this->description = $description;
        $this->id_settings_type_email = $id_settings_type_email;
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
    public function findPeopleEmail(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}