<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class PeopleImagensModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class PeopleImagensModel extends Model
{
    /**
     * PeopleImagensModel constructor.
     */
    public function __construct()
    {
        parent::__construct("people_imagens", ["id"], ["id_people", "description", "url", "id_settings_type_image",
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
     * @param string $description
     * @param string $url
	 * @param int $id_settings_type_image
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return PeopleImagensModel
     */
    public function bootstrap( 
		int $id_people,
		string $description,
		string $url,
		int $id_settings_type_image,
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): PeopleImagensModel {
        $this->id_people = $id_people;
        $this->description = $description; 
        $this->url = $url;
		$this->id_settings_type_image = $id_settings_type_image;
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
    public function findPeopleImagens(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}