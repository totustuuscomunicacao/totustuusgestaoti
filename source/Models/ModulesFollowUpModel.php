<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * RCCDIVINOPOLIS | Class ModulesFollowUpModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class ModulesFollowUpModel extends Model
{
    /**
     * ModulesFollowUpModel constructor.
     */
    public function __construct()
    {
        parent::__construct("modules_follow_up", ["id"], [ "id_follow_up", "id_modules", "id_setting_namespace", "id_type_of_situation"]);
    }
	
    /**
     * @param int $id_follow_up
     * @param int $id_modules
     * @param int $id_setting_namespace
     * @param int $id_type_of_situation
     * @return ModulesFollowUpModel
     */
    public function bootstrap( 
		int $id_follow_up, 
		int $id_modules,
		string $id_setting_namespace,
		int $id_type_of_situation
    ): ModulesFollowUpModel {  
		$this->id_follow_up = $id_follow_up; 
        $this->id_modules = $id_modules; 
		$this->id_setting_namespace = $id_setting_namespace; 
        $this->id_type_of_situation = $id_type_of_situation;
        return $this;
    }

    /**
     * @param null|string $terms
     * @param null|string $params
     * @return mixed|Model
     */
    public function findModulesFollowUp(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}