<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * RCCDIVINOPOLIS | Class TypeReactionsModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class TypeReactionsModel extends Model
{
    /**
     * TypeReactionsModel constructor.
     */
    public function __construct()
    {
        parent::__construct("type_reactions", ["id"], ["reactions", "icon", "id_type_of_situation"]);
    }

    /**
     * @param string $reactions
     * @param string $icon
     * @param int $id_type_of_situation
     * @return TypeReactionsModel
     */
    public function bootstrap(   
		string $reactions, 
		string $icon,
		int $id_type_of_situation
    ): TypeReactionsModel {     
        $this->reactions = $reactions;  
        $this->icon = $icon;  
        $this->id_type_of_situation = $id_type_of_situation;
        return $this;
    }

    /**
     * @param null|string $terms
     * @param null|string $params
     * @return mixed|Model
     */
    public function findTypeReactions(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }
}