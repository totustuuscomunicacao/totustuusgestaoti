<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class PeopleSocialNetworkModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class PeopleSocialNetworkModel extends Model
{
    /**
     * PeopleSocialNetworkModel constructor.
     */
    public function __construct()
    {
        parent::__construct("people_social_network", ["id"], ["id_people", "name", "page", "app", "creator", "id_settings_type_of_social_network",
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
     * @param string $name
     * @param string $page
     * @param string $app
     * @param string $creator
     * @param int $id_settings_type_of_social_network
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return PeopleSocialNetworkModel
     */
    public function bootstrap( 
		int $id_people, 
		string $name, 
		string $page, 
		string $app, 
		string $creator, 
		int $id_settings_type_of_social_network, 
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): PeopleSocialNetworkModel {
        $this->id_people = $id_people;
        $this->name = $name;
        $this->page = $page;
        $this->app = $app;
        $this->creator = $creator;
        $this->id_settings_type_of_social_network = $id_settings_type_of_social_network;
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
    public function findPeopleSocialNetwork(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}