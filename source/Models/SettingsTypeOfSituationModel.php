<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * RCCDIVINOPOLIS | Class SettingsTypeOfSituationModel Active Record standard
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsTypeOfSituationModel extends Model
{
    /**
     * SettingsTypeOfSituationModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_type_of_situation", ["id"], ["description", "status", "standard",
            "registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param string $description
     * @param string $status
     * @param int $standard
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return SettingsTypeOfSituationModel
     */
    public function bootstrap(
        string $description,
        string $status,
        int $standard,
        string $registration_date,
        string $updated_date,
        int $id_settings_type_of_situation
    ): SettingsTypeOfSituationModel {
        $this->description = $description;
        $this->status = $status;
        $this->standard = $standard;
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
    public function findSettingsTypeOfSituation(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}