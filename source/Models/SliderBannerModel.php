<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TotusTuus | Class SliderBannerModel
 *
 * @author Jefferson A. G. Silva <gontijo765@msn.com>
 * @package Source\Models
 */
class SliderBannerModel extends Model
{
    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct("slider_banner", ["id"], ["cod", "id_entity", "title", "icon", "link", "tags", "start_date", "final_date", "id_type_of_situation"]);
    }

    /**
     * @param string $cod
     * @param int $id_entity
     * @param string $title
     * @param string $icon
     * @param string $link
     * @param string $tags
     * @param date $start_date
     * @param date $final_date
     * @param int $id_type_of_situation
     * @return SliderBannerModel
     */
    public function bootstrap(
        string $cod,
        int $id_entity,
        string $title,
        string $icon,
        string $link,
        string $tags,
        date $start_date,
        date $final_date,
        int $id_type_of_situation
    ): SliderBannerModel {
        $this->cod = $cod;
        $this->id_entity = $id_entity;
        $this->title = $title;
        $this->icon = $icon;
        $this->link = $link;
        $this->tags = $tags;
        $this->start_date = $start_date;
        $this->final_date = $final_date;
        $this->id_type_of_situation = $id_type_of_situation;
        return $this;
    }

    /**
     * @param null|string $terms
     * @param null|string $params
     * @param string $columns
     * @return mixed|Model
     */
    public function findSliderBannerAll(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms =  ($terms ? " AND {$terms}" : "");
        $params = ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

    /**
     * @param null|string $terms
     * @param null|string $params
     * @param string $columns
     * @return mixed|Model
     */
    public function findSliderBanner(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

    /**
     * @return null|SettingsTypeOfSituationModel
     */
    public function typeofsituation(): ?SettingsTypeOfSituationModel
    {
        if ($this->id_type_of_situation) {

            return (new SettingsTypeOfSituationModel())->findById($this->id_type_of_situation);
        }
        return null;
    }
}