<?php

namespace App\Soap\Response;

class GetIdentificationTreeResponse
{
    /**
     * @var string
     */    
    protected $getIdentificationTreeResponse;

    /**
     * GetConversionAmountResponse constructor.
     *
     * @param string
     */
    public function __construct($getIdentificationTreeResponse)
    {        
        $this->getIdentificationTreeResponse = $getIdentificationTreeResponse;
    }    

    public function getIdentificationTreeResponse()
    {   
        return $this->getIdentificationTreeResponse;
    }
    
}