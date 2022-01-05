<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class PeopleGeneralRecordModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class PeopleGeneralRecordModel extends Model
{
    /**
     * PeopleGeneralRecordModel constructor.
     */
    public function __construct()
    {
        parent::__construct("people_general_record", ["id"], ["id_people", "description", "issue_date", "source_document", "duplicate",
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
     * @param string $description
     * @param date $issue_date
     * @param string $source_document
     * @param string $duplicate
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return PeopleGeneralRecordModel
     */
    public function bootstrap( 
		int $id_people, 
		string $description,
		date $issue_date, 
		string $source_document,
		string $duplicate, 
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): PeopleGeneralRecordModel {
        $this->id_people = $id_people;
        $this->description = $description; 
        $this->issue_date = $issue_date;
        $this->source_document = $source_document; 
        $this->duplicate = $duplicate;
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
    public function findPeopleGeneralRecord(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}