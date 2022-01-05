<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class PeopleSignInModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class PeopleSignInModel extends Model
{
    /**
     * PeopleSignInModel constructor.
     */
    public function __construct()
    {
        parent::__construct("people_sign_in", ["id"], ["id_people", "username", "password", "two_factor_authentication", 
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
     * @param string $username
     * @param string $password
	 * @param int $two_factor_authentication
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return PeopleSignInModel
     */
    public function bootstrap( 
		int $id_people,
		string $username,
		string $password,
		int $two_factor_authentication,
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): PeopleSignInModel {
        $this->id_people = $id_people;
        $this->username = $username; 
        $this->password = $password;
        $this->two_factor_authentication = $two_factor_authentication;
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
    public function findPeopleSignIn(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}