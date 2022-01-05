<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class PeopleDocumentsModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class PeopleDocumentsModel extends Model
{
    /**
     * PeopleDocumentsModel constructor.
     */
    public function __construct()
    {
        parent::__construct("people_documents", ["id"], ["id_people", "birth_date", "mother_name", "father_name", 
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
     * @param date $birth_date
     * @param string $mother_name
     * @param string $father_name
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return PeopleDocumentsModel
     */
    public function bootstrap( 
		int $id_people, 
		date $birth_date, 
		string $mother_name,
		string $father_name, 
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): PeopleDocumentsModel {
        $this->id_people = $id_people;
        $this->birth_date = $birth_date;
        $this->mother_name = $mother_name; 
        $this->father_name = $father_name;
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
    public function findPeopleDocuments(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}