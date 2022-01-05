<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class SettingsFollowUpModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsFollowUpModel extends Model
{
    /**
     * SettingsFollowUpModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_follow_up", ["id"], ["title", "subtitle", "description", "id_settings_icons", "id_settings_color",
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param string $title
     * @param string $subtitle
     * @param string $description
     * @param int $id_settings_icons
     * @param int $id_settings_color
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return SettingsFollowUpModel
     */
    public function bootstrap(  
		string $title,  
		string $subtitle,  
		string $description, 
		int $id_settings_icons,
        int $id_settings_color,
        date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): SettingsFollowUpModel {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->description = $description;
        $this->id_settings_icons = $id_settings_icons;
        $this->id_settings_color = $id_settings_color;
        $this->registration_date = $registration_date; 
		$this->updated_date = $updated_date;
		$this->id_settings_type_of_situation = $id_settings_type_of_situation;
        return $this;
    }

    /**
     * @param null|string $terms
     * @param null|string $params
     * @param string $columns
     * @return mixed|Model
     */
    public function findSettingsFollowUp(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

    /**
     * @return null|SettingsIconsModel
     */
    public function SettingsFollowUpToSettingsIcons(): ?SettingsIconsModel
    {
        if ($this->id_settings_icons) {
            return (new SettingsIconsModel())->findById($this->id_settings_icons);
        }
        return null;
    }

    /**
     * @return null|SettingsColorModel
     */
    public function SettingsFollowUpToSettingsColor(): ?SettingsColorModel
    {
        if ($this->id_settings_color) {
            return (new SettingsColorModel())->findById($this->id_settings_color);
        }
        return null;
    }

}