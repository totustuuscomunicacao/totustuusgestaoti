<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class PeopleDriverLicenseModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class PeopleDriverLicenseModel extends Model
{
    /**
     * PeopleDriverLicenseModel constructor.
     */
    public function __construct()
    {
        parent::__construct("people_driver_license", ["id"], ["id_people", "registration_number", "expiration_date", "first_license", "qualification_category", "issue_date", "id_settings_city", "mirror_number_cnh", "renach",
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
     * @param int $registration_number
     * @param date $expiration_date
	 * @param string $first_license
     * @param string $qualification_category
     * @param date $issue_date
     * @param int $id_settings_city
     * @param int $mirror_number_cnh
	 * @param string $renach
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return PeopleDriverLicenseModel
     */
    public function bootstrap( 
		int $id_people,
		int $registration_number,
		date $expiration_date,
		string $first_license,
		string $qualification_category,
		date $issue_date,
		int $id_settings_city,
		int $mirror_number_cnh,
		string $renach,
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): PeopleDriverLicenseModel {
        $this->id_people = $id_people;
        $this->registration_number = $registration_number; 
        $this->expiration_date = $expiration_date;
        $this->first_license = $first_license;
        $this->qualification_category = $qualification_category;
        $this->issue_date = $issue_date;
        $this->id_settings_city = $id_settings_city; 
        $this->mirror_number_cnh = $mirror_number_cnh;
        $this->renach = $renach;
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
    public function findPeopleDriverLicense(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}