<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * RCCDIVINOPOLIS | Class TypeLegalNatureModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class TypeLegalNatureModel extends Model
{
    /**
     * TypeLegalNatureModel constructor.
     */
    public function __construct()
    {
        parent::__construct("type_legal_nature", ["id"], ["code", "description", "members", "registration_date", "updated_date", "id_type_of_situation"]);
    }

    /**
     * @param string $code
     * @param string $description
     * @param string $members
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_type_of_situation
     * @return TypeLegalNatureModel
     */
    public function bootstrap(   
		string $code, 
		string $description,
		string $members,
        date $registration_date,
        date $updated_date,
		int $id_type_of_situation
    ): TypeLegalNatureModel {     
        $this->code = $code;    
        $this->description = $description;    
        $this->members = $members;  
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
    public function findTypeLegalNature(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }
}