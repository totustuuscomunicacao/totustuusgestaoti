<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * RCCDIVINOPOLIS | Class ModulesLicenseModel Active Record Pattern
 *
 * @author Jefferson A. G. Silva <contato@totustuuscomunicacao.com.br>
 * @package Source\Models
 */
class ModulesLicenseModel extends Model
{
    /**
     * ModulesLicenseModel constructor.
     */
    public function __construct()
    {
        parent::__construct("modules_license", ["id"], ["id_modules", "price_week", "price_year", "id_type_of_situation"]);
    }

    /**
     * @param int $id_modules
     * @param float $price_week
     * @param float $price_year
     * @param int $id_type_of_situation
     * @return ModulesLicenseModel
     */
    public function bootstrap(  
		int $id_modules,
		float $price_week,
        float $price_year,
		int $id_type_of_situation
    ): ModulesLicenseModel {   
        $this->id_modules = $id_modules; 
		$this->price_week = $price_week;
		$this->price_year = $price_year; 
        $this->id_type_of_situation = $id_type_of_situation;
        return $this;
    }

    /**
     * @param null|string $terms
     * @param null|string $params
     * @return mixed|Model
     */
    public function findModulesLicense(?string $terms = null, ?string $params = null, string $columns = "*")
    {
        $terms = ($terms ? " {$terms}" : "");
        $params = ($params ? "&{$params}" : "");

        return parent::find($terms, $params, $columns);
    }

}