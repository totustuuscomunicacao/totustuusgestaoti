<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class PeopleDismissalCertificateModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class PeopleDismissalCertificateModel extends Model
{
    /**
     * PeopleDismissalCertificateModel constructor.
     */
    public function __construct()
    {
        parent::__construct("people_dismissal_certificate", ["id"], ["id_people", "description", "incorporation", "issue_date", "id_settings_city", 
		"registration_date", "updated_date", "id_settings_type_of_situation"]);
    }

    /**
     * @param int $id_people
     * @param string $description
	 * @param string $incorporation
     * @param date $issue_date
     * @param int $id_settings_city
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_settings_type_of_situation
     * @return PeopleDismissalCertificateModel
     */
    public function bootstrap( 
		int $id_people,
		string $description,
		string $incorporation,
		date $issue_date,
		int $id_settings_city,
		date $registration_date,
		date $updated_date,
		int $id_settings_type_of_situation
    ): PeopleDismissalCertificateModel {
        $this->id_people = $id_people;
        $this->description = $description; 
        $this->incorporation = $incorporation;
        $this->issue_date = $issue_date;
        $this->id_settings_city = $id_settings_city; 
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
    public function findPeopleDismissalCertificate(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_settings_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}