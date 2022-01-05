<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * RCCDIVINOPOLIS | Class SettingsGroupModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsGroupModel extends Model
{
    /**
     * SettingsGroupModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_group", ["id"], ["id_setting_namespace", "description", "id_type_of_situation"]);
    }

    /**
	 * @param int $id_setting_namespace
     * @param string $description
     * @param int $id_type_of_situation
     * @return SettingsGroupModel
     */
    public function bootstrap(  
		int $id_setting_namespace,
		string $description,
		int $id_type_of_situation
    ): SettingsGroupModel { 
		$this->id_setting_namespace = $id_setting_namespace;
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
    public function findSettingsGroup(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}