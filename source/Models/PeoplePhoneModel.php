<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class PeoplePhoneModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class PeoplePhoneModel extends Model
{
    /**
     * PeoplePhoneModel constructor.
     */
    public function __construct()
    {
        parent::__construct("people_phone", ["id"], ["id_people", "id_settings_type_phone", "id_settings_country", "ddd", "number", 
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
     * @param int $id_settings_type_phone
     * @param int $id_settings_country
     * @param int $ddd
     * @param string $number
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return PeoplePhoneModel
     */
    public function bootstrap( 
		int $id_people, 
		int $id_settings_type_phone, 
		int $id_settings_country, 
		int $ddd, 
		string $number, 
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): PeoplePhoneModel {
        $this->id_people = $id_people;
        $this->id_settings_type_phone = $id_settings_type_phone;
        $this->id_settings_country = $id_settings_country;
        $this->ddd = $ddd;
        $this->number = $number;
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
    public function findPeoplePhone(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}