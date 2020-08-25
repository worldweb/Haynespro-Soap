<?php

namespace App\Http\Controllers;

use Artisaninweb\SoapWrapper\SoapWrapper;
use App\Soap\Request\GetConversionAmount;
use App\Soap\Response\GetConversionAmountResponse;
use App\Soap\Request\GetAuthenticationVrid;
use App\Soap\Response\GetAuthenticationVridResponse;
use App\Soap\Request\GetIdentificationTree;
use App\Soap\Response\GetIdentificationTreeResponse;

class SoapController
{
    /**
     * @var SoapWrapper
     */
    protected $soapWrapper;

    /**
     * SoapController constructor.
     *
     * @param SoapWrapper $soapWrapper
     */
    public function __construct(SoapWrapper $soapWrapper)
    {
        $this->soapWrapper = $soapWrapper;
    }

    /**
     * Use the SoapWrapper
     */
    public function show() 
    {       
        $this->soapWrapper->add('Haynespro', function ($service) {    
            $service            
            ->wsdl('https://www.haynespro-services.com/workshopServices3/services/DataServiceEndpoint?wsdl') // The WSDL url
            ->trace(true)              // Optional: (parameter: true/false)
            //->header()               // Optional: (parameters: $namespace,$name,$data,$mustunderstand,$actor)
            //->customHeader()         // Optional: (parameters: $customerHeader) Use this to add a custom SoapHeader or extended class                
            //->cookie()               // Optional: (parameters: $name,$value)
            //->location()             // Optional: (parameter: $location)
            //->certificate()          // Optional: (parameter: $certLocation)
            //->cache(WSDL_CACHE_NONE) // Optional: Set the WSDL cache
        
            // Optional: Set some extra options
            ->options([
                'user_agent' => 'PHPSoapClient',               
            ])

            // Optional: Classmap
            ->classmap([               
                GetAuthenticationVrid::class,
                GetAuthenticationVridResponse::class,
                GetIdentificationTree::class,
                GetIdentificationTreeResponse::class
            ]);
        });        

        $response = $this->soapWrapper->call('Haynespro.getAuthenticationVrid', [
            new GetAuthenticationVrid('serviceright_demo', 'eUeEZNMvu5F4JA6B', 'd.rashid@serviceright.nl')
        ]);
                
        if( $response->getAuthenticationVridReturn->statusCode == 0 ) {
            
            $vrid = $response->getAuthenticationVridReturn->vrid;        

            $identificationResponse = $this->soapWrapper->call('Haynespro.getIdentificationTree', [
                new getIdentificationTree( $vrid, "en", "26650", "TYPE" )
            ]);

            echo '<pre>';
            print_r($response);
            print_r($identificationResponse);
            echo '</pre>';
        }       
    
        exit;
    }
}