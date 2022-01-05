<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * RCCDIVINOPOLIS | Class ComponentsTabCodeModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class ComponentsTabCodeModel extends Model
{
    /**
     * ComponentsTabCodeModel constructor.
     */
    public function __construct()
    {
        parent::__construct("components_tab_code", ["id"], ["id_settings_page", "id_components_tab", "code", 
		"registration_date", "updated_date", "id_type_of_situation"]);
    }

    /**
     * @param int $id_settings_page
     * @param int $id_components_tab
	 * @param string $code
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_type_of_situation
     * @return ComponentsTabCodeModel
     */
    public function bootstrap(   
		int $id_settings_page,    
		int $id_components_tab,
        string $code,
        date $registration_date,
        date $updated_date,
		int $id_type_of_situation
    ): ComponentsTabCodeModel {   
        $this->id_settings_page = $id_settings_page;  
        $this->id_components_tab = $id_components_tab;
		$this->code = $code; 
		$this->registration_date = $registration_date;
		$this->updated_date = $updated_date;
        $this->id_type_of_situation = $id_type_of_situation;
        return $this;
    }

    /**
     * @param null|string $terms
     * @param null|string $params
     * @param string $columns
     * @return mixed|Model
     */
    public function findComponentsTabCode(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }
}