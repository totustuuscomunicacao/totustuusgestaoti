<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class PeopleCnaeModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class PeopleCnaeModel extends Model
{
    /**
     * PeopleCnaeModel constructor.
     */
    public function __construct()
    {
        parent::__construct("people_cnae", ["id"], ["id_people", "id_settings_cnae_subclass", "id_settings_type_main_economic_activity",
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
	 * @param int $id_settings_cnae_subclass
     * @param int $id_settings_type_main_economic_activity
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return PeopleCnaeModel
     */
    public function bootstrap( 
		int $id_people,
		int $id_settings_cnae_subclass,
		int $id_settings_type_main_economic_activity,
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): PeopleCnaeModel {
        $this->id_people = $id_people;
		$this->id_settings_cnae_subclass = $id_settings_cnae_subclass;
        $this->id_settings_type_main_economic_activity = $id_settings_type_main_economic_activity;
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
    public function findPeopleCnae(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}