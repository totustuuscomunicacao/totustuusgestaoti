<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class PeopleAddressModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class PeopleAddressModel extends Model
{
    /**
     * PeopleAddressModel constructor.
     */
    public function __construct()
    {
        parent::__construct("people_address", ["id"], ["id_people", "id_settings_type_address", "place_name", "zip_code", "street", 
		"address_number", "complement", "reference", "neighborhood", "id_settings_city", "id_settings_state", "id_settings_country", "latitude", "longitude", 
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
     * @param int $id_settings_type_address
     * @param string $place_name
     * @param string $zip_code
     * @param string $street
     * @param string $address_number
     * @param string $complement
	 * @param string $reference
     * @param string $neighborhood
     * @param int $id_settings_city
     * @param int $id_settings_state
     * @param int $id_settings_country
     * @param string $latitude
     * @param string $longitude
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return PeopleAddressModel
     */
    public function bootstrap( 
		int $id_people, 
		int $id_settings_type_address, 
		string $place_name, 
		string $zip_code, 
		string $street, 
		string $address_number, 
		string $complement, 
		string $reference,
		string $neighborhood, 
		int $id_settings_city, 
		int $id_settings_state, 
		int $id_settings_country, 
		string $latitude, 
		string $longitude, 
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): PeopleAddressModel {
        $this->id_people = $id_people;
        $this->id_settings_type_address = $id_settings_type_address;
        $this->place_name = $place_name;
        $this->zip_code = $zip_code;
        $this->street = $street;
        $this->address_number = $address_number;
        $this->complement = $complement;
        $this->reference = $reference;
        $this->neighborhood = $neighborhood;
        $this->id_settings_city = $id_settings_city;
        $this->id_settings_state = $id_settings_state;
        $this->id_settings_country = $id_settings_country;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
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
    public function findPeopleAddress(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}