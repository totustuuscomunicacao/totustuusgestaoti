<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class MenuTerceiroNivelModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class MenuTerceiroNivelModel extends Model
{
    /**
     * MenuTerceiroNivelModel constructor.
     */
    public function __construct()
    {
        parent::__construct("menu_terceiro_nivel", ["id"], ["id_menu_segundo_nivel", "title", "description", 
		"id_icons", "dropdown", "id_setting_route", "column", "ordination",
		"registration_date", "updated_date", "id_type_of_situation"]);
    }

    /**
     * @param int $id_menu_segundo_nivel
     * @param int $id_modules
     * @param int $id_settings_namespace
     * @param string $title
     * @param string $description
     * @param int $id_icons
     * @param string $dropdown
     * @param int $id_setting_route
     * @param string $column
     * @param string $ordination
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_type_of_situation
     * @return MenuSegundoNivelModel
     */
    public function bootstrap(  
		int $id_menu_segundo_nivel,
		string $title,
		string $description,
		int $id_icons,
		string $dropdown,
		int $id_setting_route,
        string $column,
		string $ordination,
		date $registration_date,
		date $updated_date,
		int $id_type_of_situation
    ): MenuTerceiroNivelModel {   
        $this->id_menu_segundo_nivel = $id_menu_segundo_nivel; 
		$this->title = $title;
		$this->description = $description;
		$this->id_icons = $id_icons;
		$this->dropdown = $dropdown;
		$this->id_setting_route = $id_setting_route;
        $this->column = $column;
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
    public function findMenuTerceiroNivel(?string $terms = null, ?string $params = null, string $columns = "*")
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