<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class ShippingCompanyModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class ShippingCompanyModel extends Model
{
    /**
     * ShippingCompanyModel constructor.
     */
    public function __construct()
    {
        parent::__construct("shipping_company", ["id"], ["id_people", 
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return ShippingCompanyModel
     */
    public function bootstrap( 
		int $id_people, 
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): ShippingCompanyModel {
        $this->id_people = $id_people;
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
    public function findShippingCompany(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}