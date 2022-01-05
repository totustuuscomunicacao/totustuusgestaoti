<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * RCCDIVINOPOLIS | Class SettingsEntityUserOnlineModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class SettingsEntityUserOnlineModel extends Model
{
    /**
     * SettingsEntityUserOnlineModel constructor.
     */
    public function __construct()
    {
        parent::__construct("settings_entity_user_online", ["id"], ["id_people", "id_entity", 
		"registration_date", "updated_date", "id_type_of_situation"]);
    }

    /**
     * @param int $id_people
     * @param int $id_entity
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_type_of_situation
     * @return SettingsEntityUserOnlineModel
     */
    public function bootstrap(   
		int $id_people,
		int $id_entity,
        date $registration_date,
        date $updated_date,
		int $id_type_of_situation
    ): SettingsEntityUserOnlineModel {   
        $this->id_people = $id_people;
        $this->id_entity = $id_entity;
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
    public function findSettingsEntityUserOnline(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }
}