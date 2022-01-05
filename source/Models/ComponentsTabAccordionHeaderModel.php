<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * RCCDIVINOPOLIS | Class ComponentsTabAccordionHeaderModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class ComponentsTabAccordionHeaderModel extends Model
{
    /**
     * ComponentsTabAccordionHeaderModel constructor.
     */
    public function __construct()
    {
        parent::__construct("components_tab_accordion_header", ["id"], ["id_settings_page", "id_components_tab", "description", "collapse_target", "collapse_toggle", "ordination",
		"registration_date", "updated_date", "id_type_of_situation"]);
    }

    /**
     * @param int $id_settings_page
     * @param int $id_components_tab
     * @param string $description
     * @param string $collapse_target
     * @param string $collapse_toggle
     * @param int $ordination
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_type_of_situation
     * @return ComponentsTabAccordionHeaderModel
     */
    public function bootstrap(   
		int $id_settings_page,    
		int $id_components_tab, 
		string $description,
        string $collapse_target, 
		string $collapse_toggle, 
		int $ordination,
        date $registration_date,
        date $updated_date,
		int $id_type_of_situation
    ): ComponentsTabAccordionHeaderModel {   
        $this->id_settings_page = $id_settings_page;  
        $this->id_components_tab = $id_components_tab;
        $this->description = $description;
        $this->collapse_target = $collapse_target;
        $this->collapse_toggle = $collapse_toggle;
        $this->ordination = $ordination;   
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
    public function findComponentsTabAccordionHeader(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }
}