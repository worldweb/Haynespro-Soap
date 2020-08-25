<?php

namespace App\Soap\Request;

class GetIdentificationTree
{
    /**
     * @var string
     */
    protected $vrid;    

     /**
     * @var string
     */
    protected $descriptionLanguage;    

     /**
     * @var int
     */
    protected $vehicle_id;    

    /**
     * @var string
     */
    protected $vehicle_level;   
    
    protected $filter_dataset;
    protected $filter_category;
    protected $filter_toVehicleLevel;
    protected $filter_criteriaKeys;
    protected $filter_criteriaValues;

    /**
     * GetConversionAmount constructor.
     *
     * @param string $CurrencyFrom
     * @param string $CurrencyTo
     * @param string $RateDate
     * @param string $Amount
     */
    public function __construct($vrid, $descriptionLanguage, $vehicle_id, $vehicle_level, $filter_dataset="", $filter_category="", $filter_toVehicleLevel="", $filter_criteriaKeys="", $filter_criteriaValues="")
    {
        $this->vrid = $vrid;        
        $this->descriptionLanguage = $descriptionLanguage;        
        $this->vehicle_id = $vehicle_id;
        $this->vehicle_level = $vehicle_level;                

        $this->filter_dataset = $filter_dataset;                
        $this->filter_category = $filter_category;                
        $this->filter_toVehicleLevel = $filter_toVehicleLevel;                
        $this->filter_criteriaKeys = $filter_criteriaKeys;                
        $this->filter_criteriaValues = $filter_criteriaValues;                
    }

    /**
     * @return string
     */
    public function getVrid()
    {
        return $this->vrid;
    }   

    /**
     * @return string
     */
    public function getDescriptionLanguage()
    {
        return $this->descriptionLanguage;
    }   

    /**
     * @return string
     */
    public function getVehicle_id()
    {
        return $this->vehicle_id;
    }   

    /**
     * @return string
     */
    public function getVehicle_level()
    {
        return $this->vehicle_level;
    }   
}