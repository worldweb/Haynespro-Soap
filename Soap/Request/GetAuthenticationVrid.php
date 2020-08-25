<?php

namespace App\Soap\Request;

class GetAuthenticationVrid
{
    /**
     * @var string
     */
    protected $distributorUsername;

    /**
     * @var string
     */
    protected $distributorPassword;

    /**
     * @var string
     */
    protected $username;   

    /**
     * GetConversionAmount constructor.
     *
     * @param string $CurrencyFrom
     * @param string $CurrencyTo
     * @param string $RateDate
     * @param string $Amount
     */
    public function __construct($distributorUsername, $distributorPassword, $username)
    {
        $this->distributorUsername = $distributorUsername;
        $this->distributorPassword   = $distributorPassword;
        $this->username     = $username;       
    }

    /**
     * @return string
     */
    public function getDistributorUsername()
    {
        return $this->distributorUsername;
    }

    /**
     * @return string
     */
    public function getDistributorPassword()
    {
        return $this->distributorPassword;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
}