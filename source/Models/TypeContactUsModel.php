<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class TypeContactUsModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class TypeContactUsModel extends Model
{
    /**
     * TypeContactUsModel constructor.
     */
    public function __construct()
    {
        parent::__construct("type_contact_us", ["id"], ["description", "registration_date", "updated_date", "id_type_of_situation"]);
    }

    /**
     * @param string $description
     * @param date $registration_date
     * @param date $updated_date
     * @return TypeContactUsModel
     */
    public function bootstrap(  
		string $description,
		date $registration_date,
		date $updated_date,
		int $id_type_of_situation
    ): TypeContactUsModel {   
        $this->description = $description;
		$this->registration_date = $registration_date;
		$this->updated_date = $updated_date;
        return $this;
    }

    /**
     * @param null|string $terms
     * @param null|string $params
     * @return mixed|Model
     */
    public function findTypeContactUs(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}