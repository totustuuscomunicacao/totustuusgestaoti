<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * RCCDIVINOPOLIS | Class SettingsRouteModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsRouteModel extends Model
{
    /**
     * SettingsRouteModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_route", ["id"], ["id_settings_group", "id_setting_get_set", "route",
            "controller", "handler", "description", "page",
            "registration_date", "updated_date", "id_type_of_situation"]);
    }

    /**
     * @param int $id_settings_group
     * @param int $id_setting_get_set
     * @param string $route
     * @param string $controller
     * @param string $handler
     * @param string $description
     * @param string $page
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_type_of_situation
     * @return SettingsRouteModel
     */
    public function bootstrap(  
		int $id_settings_group, 
		int $id_setting_get_set, 
		string $route,
		string $controller,
		string $handler,
		string $description,
        string $page,
        date $registration_date,
        date $updated_date,
        int $id_type_of_situation
    ): SettingsRouteModel {   
		$this->id_settings_group = $id_settings_group; 
		$this->id_setting_get_set = $id_setting_get_set; 
        $this->route = $route; 
		$this->controller = $controller;
		$this->handler = $handler;
		$this->description = $description;
        $this->page = $page;
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
    public function findSettingsRoute(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

    /**
     * @return null|SettingsGetSetModel
     */
    public function SettingsGetSetToSettingsRoute(): ?SettingsGetSetModel
    {
        if ($this->id_setting_get_set) {

            return (new SettingsGetSetModel())->findById($this->id_setting_get_set);
        }
        return null;
    }

}