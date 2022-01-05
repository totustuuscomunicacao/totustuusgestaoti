<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * RCCDIVINOPOLIS | Class TypeEventModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class TypeEventModel extends Model
{
    /**
     * TypeEventModel constructor.
     */
    public function __construct()
    {
        parent::__construct("type_event", ["id"], ["description", "id_type_of_situation"]);
    }

    /**
     * @param string $description
     * @param int $id_type_of_situation
     * @return TypeEventModel
     */
    public function bootstrap(   
		string $description,
		int $id_type_of_situation
    ): TypeEventModel {     
        $this->description = $description; 
        $this->id_type_of_situation = $id_type_of_situation;
        return $this;
    }

    /**
     * @param null|string $terms
     * @param null|string $params
     * @return mixed|Model
     */
    public function findTypeEvent(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }
}