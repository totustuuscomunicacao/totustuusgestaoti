<?php

namespace Source\Models;

use Source\Core\Model;
/**
 * TotusTuus | Class NivelModel
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class NivelModel extends Model
{
    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct("nivel", ["id"], ["description", "id_nivel", "id_type_of_situation"]);
    }
	
    /**
     * @param string $description
     * @param int $id_type_of_situation
     * @return NivelModel
     */
    public function bootstrap(
        string $description,
        int $id_type_of_situation
    ): NivelModel {
        $this->description = $description;
        $this->id_type_of_situation = $id_type_of_situation;
        return $this;
    }

    /**
     * @param null|string $terms
     * @param null|string $params
     * @param string $columns
     * @return mixed|Model
     */
    public function findNivel(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}