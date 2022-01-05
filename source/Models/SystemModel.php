<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TotusTuus | Class SystemModel
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SystemModel extends Model
{
    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct("system", ["id"], ["id_people", "description", "id_settings_icons",
            "registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
     * @param string $description
     * @param int $id_settings_icons
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return SystemModel
     */
    public function bootstrap(
        int $id_people,
        string $description,
        int $id_settings_icons,
        date $registration_date,
        date $updated_date,
        int $id_settings_type_of_situation
    ): SystemModel {
        $this->id_people = $id_people;
        $this->description = $description;
        $this->id_settings_icons = $id_settings_icons;
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
    public function findSystem(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

    /**
     * @return null|SettingsTypeOfRegistrationModel
     */
    public function SystemToSettingsTypeOfRegistration(): ?SettingsTypeOfRegistrationModel
    {
        if ($this->id_settings_type_of_registration) {

            return (new SettingsTypeOfRegistrationModel())->findById($this->id_settings_type_of_registration);
        }
        return null;
    }

    /**
     * @return null|SettingsIconsModel
     */
    public function SystemToSystemNationalRegister(): ?SettingsIconsModel
    {
        if ($this->id_settings_icons) {

            return (new SettingsIconsModel())->findById($this->id_settings_icons);

        }
        return null;
    }
}