<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class PeopleNationalRegisterModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class PeopleNationalRegisterModel extends Model
{
    /**
     * PeopleNationalRegisterModel constructor.
     */
    public function __construct()
    {
        parent::__construct("people_national_register", ["id"], ["id_people", "description", "opening_date", "id_settings_type_company_sizes", "id_settings_type_legal_nature", "id_settings_type_registration_status",
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
     * @param string $description
     * @param date $opening_date
     * @param int $id_settings_type_company_sizes
     * @param int $id_settings_type_legal_nature
     * @param int $id_settings_type_registration_status
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return PeopleNationalRegisterModel
     */
    public function bootstrap( 
		int $id_people, 
		string $description, 
		date $opening_date,
		int $id_settings_type_company_sizes, 
		int $id_settings_type_legal_nature, 
		int $id_settings_type_registration_status, 
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): PeopleNationalRegisterModel {
        $this->id_people = $id_people;
        $this->description = $description;
        $this->opening_date = $opening_date; 
        $this->id_settings_type_company_sizes = $id_settings_type_company_sizes;
        $this->id_settings_type_legal_nature = $id_settings_type_legal_nature;
        $this->id_settings_type_registration_status = $id_settings_type_registration_status;
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
    public function findPeopleNationalRegister(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}