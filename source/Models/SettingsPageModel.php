<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * RCCDIVINOPOLIS | Class SettingsPageModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsPageModel extends Model
{
    /**
     * SettingsPageModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_page", ["id"], ["id_follow_up", "id_modules", "id_settings_seo", "id_settings_route", "id_icons",
		"registration_date", "updated_date", "id_type_of_situation"]);
    }

    /**
     * @param int $id_follow_up
     * @param int $id_modules
     * @param int $id_settings_seo
     * @param int $id_settings_route
     * @param int $id_icons
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_type_of_situation
     * @return SettingsPageModel
     */
    public function bootstrap(   
		int $id_follow_up,  
		int $id_modules,  
		int $id_settings_seo,  
		int $id_settings_route,
        int $id_icons,
        date $registration_date,
        date $updated_date,
		int $id_type_of_situation
    ): SettingsPageModel {   
        $this->id_follow_up = $id_follow_up;  
        $this->id_modules = $id_modules;    
        $this->id_settings_seo = $id_settings_seo;    
        $this->id_settings_route = $id_settings_route;
        $this->id_icons = $id_icons;
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
    public function findSettingsPage(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

    /**
     * @return null|SettingsIconsModel
     */
    public function SettingsPageToIcons(): ?SettingsIconsModel
    {
        if ($this->id_icons) {

            return (new SettingsIconsModel())->findById($this->id_icons);
        }
        return null;
    }
}