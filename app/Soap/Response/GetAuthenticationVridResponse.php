<?php

namespace App\Soap\Response;

class GetConversionAmountResponse
{
    /**
     * @var string
     */    
    protected $getAuthenticationVrid;

    /**
     * GetConversionAmountResponse constructor.
     *
     * @param string
     */
    public function __construct($getAuthenticationVrid)
    {        
        $this->getAuthenticationVrid = $getAuthenticationVrid;
    }    

    public function getAuthenticationVrid()
    {   
        return $this->getAuthenticationVrid;
    }
    
}