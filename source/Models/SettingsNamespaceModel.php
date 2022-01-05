<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * RCCDIVINOPOLIS | Class SettingsNamespaceModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsNamespaceModel extends Model
{
    /**
     * SettingsNamespaceModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_namespace", ["id"], ["description", "ordernation", "id_type_of_situation"]);
    }
	
    /**
     * @param string $description
     * @param int $ordernation
     * @param int $id_type_of_situation
     * @return SettingsNamespaceModel
     */
    public function bootstrap(  
		string $description,
		int $ordernation,
        int $id_type_of_situation
    ): SettingsNamespaceModel { 
		$this->description = $description;
        $this->ordernation = $ordernation;
        $this->id_type_of_situation = $id_type_of_situation;
        return $this;
    }

    /**
     * @param null|string $terms
     * @param null|string $params
     * @param string $columns
     * @return mixed|Model
     */
    public function findSettingsNamespace(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}