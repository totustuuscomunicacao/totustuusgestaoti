<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * RCCDIVINOPOLIS | Class ComponentsTabModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class ComponentsTabModel extends Model
{
    /**
     * ComponentsTabModel constructor.
     */
    public function __construct()
    {
        parent::__construct("components_tab", ["id"], ["id_settings_page", "nav_text", "nav_icon", "nav_href", "nav_toggle", "ordination",
		"registration_date", "updated_date", "id_type_of_situation"]);
    }

    /**
     * @param int $id_settings_page
     * @param string $nav_text
     * @param string $nav_icon
     * @param string $nav_href
     * @param string $nav_toggle
     * @param int $ordination
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_type_of_situation
     * @return ComponentsTabModel
     */
    public function bootstrap(   
		int $id_settings_page,  
		string $nav_text,
        string $nav_icon, 
		string $nav_href, 
		string $nav_toggle,
		int $ordination,
        date $registration_date,
        date $updated_date,
		int $id_type_of_situation
    ): ComponentsTabModel {
        $this->id_settings_page = $id_settings_page;
        $this->nav_text = $nav_text;
        $this->nav_icon = $nav_icon;
        $this->nav_href = $nav_href;
        $this->nav_toggle = $nav_toggle;
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
    public function findComponentsTab(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }
}