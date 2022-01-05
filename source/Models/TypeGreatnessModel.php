<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * RCCDIVINOPOLIS | Class TypeGreatnessModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class TypeGreatnessModel extends Model
{
    /**
     * TypeGreatnessModel constructor.
     */
    public function __construct()
    {
        parent::__construct("type_greatness", ["id"], ["description", "icon", "registration_date", "updated_date", "id_type_of_situation"]);
    }

    /**
     * @param string $description
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_type_of_situation
     * @return TypeGreatnessModel
     */
    public function bootstrap(   
		string $description,
        date $registration_date,
        date $updated_date,
		int $id_type_of_situation
    ): TypeGreatnessModel {   
        $this->description = $description;   
		$this->registration_date = $registration_date;
		$this->updated_date = $updated_date;
        $this->id_type_of_situation = $id_type_of_situation;
        return $this;
    }

    /**
     * @param null|string $terms
     * @param null|string $params
     * @return mixed|Model
     */
    public function findTypeGreatness(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }
}