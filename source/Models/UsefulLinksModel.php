<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * TOTUSTUUS | Class UsefulLinksModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class UsefulLinksModel extends Model
{
    /**
     * UsefulLinksModel constructor.
     */
    public function __construct()
    {
        parent::__construct("useful_links", ["id"], ["description", "icon", "url", "ordination",
		"registration_date", "updated_date", "id_type_of_situation"]);
    }

    /**
     * @param string $description
	 * @param string $icon
     * @param string $url
	 * @param int $ordination
     * @param date $registration_date
     * @param date $updated_date
     * @param int $id_type_of_situation
     * @return MenuSegundoNivelModel
     */
    public function bootstrap(  
		string $description, 
		string $icon,
		string $url,
		int $ordination,
		date $registration_date,
		date $updated_date,
		int $id_type_of_situation
    ): UsefulLinksModel {  
		$this->description = $description;
		$this->icon = $icon;
		$this->url = $url;
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
    public function findUsefulLinks(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = "id_type_of_situation = :idtypeofsituation" . ($terms ? " AND {$terms}" : "");
        $params = "idtypeofsituation=3" . ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}