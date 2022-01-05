<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * RCCDIVINOPOLIS | Class TypeSectionModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class TypeSectionModel extends Model
{
    /**
     * TypeSectionModel constructor.
     */
    public function __construct()
    {
        parent::__construct("type_section", ["id"], ["description", "tag", "class", "id_type_of_situation"]);
    }

    /**
     * @param string $reactions
     * @param string $tag
     * @param string $class
     * @param int $id_type_of_situation
     * @return TypeSectionModel
     */
    public function bootstrap(   
		string $reactions, 
		string $tag,
		string $class,
		int $id_type_of_situation
    ): TypeSectionModel {     
        $this->reactions = $reactions;  
        $this->tag = $tag;  
        $this->class = $class;  
        $this->id_type_of_situation = $id_type_of_situation;
        return $this;
    }

    /**
     * @param null|string $terms
     * @param null|string $params
     * @return mixed|Model
     */
    public function findTypeSection(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }
}