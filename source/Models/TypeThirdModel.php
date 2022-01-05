<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * RCCDIVINOPOLIS | Class TypeThirdModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class TypeThirdModel extends Model
{
    /**
     * TypeThirdModel constructor.
     */
    public function __construct()
    {
        parent::__construct("type_third", ["id"], ["description", "icon", "id_type_of_situation"]);
    }

    /**
     * @param string $description
     * @param string $icon
     * @param int $id_type_of_situation
     * @return TypeThirdModel
     */
    public function bootstrap(   
		string $description, 
		string $icon,
		int $id_type_of_situation
    ): TypeThirdModel {     
        $this->description = $description;  
        $this->icon = $icon; 
        $this->id_type_of_situation = $id_type_of_situation;
        return $this;
    }

    /**
     * @param null|string $terms
     * @param null|string $params
     * @return mixed|Model
     */
    public function findTypeThird(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }
}