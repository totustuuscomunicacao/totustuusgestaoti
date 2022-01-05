<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class MenuModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class MenuModel extends Model
{
    /**
     * MenuModel constructor.
     */
    public function __construct()
    {
        parent::__construct("menu", ["id"], ["id_entity", "id_modules", "id_settings_namespace", 
		"title", "description", "id_icons", "dropdown", "layout_dropdown", "id_setting_route", "ordination",
		"registration_date", "updated_date", "id_type_of_situation"]);
    }

    /**
     * @param int $id_entity
     * @param int $id_modules
     * @param int $id_settings_namespace
     * @param string $title
     * @param string $description
     * @param int $id_icons
     * @param string $dropdown
     * @param string $layout_dropdown
     * @param int $id_setting_route
     * @param string $ordination
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_type_of_situation
     * @return MenuModel
     */
    public function bootstrap(  
		int $id_entity,
		int $id_modules,
		int $id_settings_namespace,
		string $title,
		string $description,
		int $id_icons,
		string $dropdown,
		string $layout_dropdown,
		int $id_setting_route,
		string $ordination,
		date $registration_date,
		date $updated_date,
		int $id_type_of_situation
    ): MenuModel {   
        $this->id_entity = $id_entity; 
		$this->id_modules = $id_modules;
		$this->id_settings_namespace = $id_settings_namespace;
		$this->title = $title;
		$this->description = $description;
		$this->id_icons = $id_icons;
		$this->dropdown = $dropdown;
		$this->layout_dropdown = $layout_dropdown;
		$this->id_setting_route = $id_setting_route;
		$this->ordination = $ordination;
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
    public function findMenu(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

    /**
     * @return null|SettingsIconsModel
     */
    public function MenuToIcons(): ?SettingsIconsModel
    {
        if ($this->id_icons) {

            $IconsValue = (new SettingsIconsModel())->findById($this->id_icons);

            return $IconsValue;
        }
        return null;
    }

    /**
     * @return null|SettingsRouteModel
     */
    public function MenuToSettingsRoute(): ?SettingsRouteModel
    {
        if($this->id_setting_route):
            $SettingsRouteValue = (new SettingsRouteModel())->findById($this->id_setting_route);
            return $SettingsRouteValue;
            endif;
        return null;
    }
}