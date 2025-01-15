<?php

namespace App\Models;

//use InvalidArgumentException

class Currency
{
    private $isoCode;

    public function __construct($isoCode)
    {
        $this->setIsoCode($isoCode);
    }


    public  function getIsoCode(): String
    {
        return $this->isoCode;
    }

    public  function setIsoCode($isoCode): void
    {
        if (!preg_match('/^[A-Z]{3}$/', $isoCode))
        {
            throw new \InvalidArgumentException("Invalid currency code.");
        }
        $this->isoCode = $isoCode;
    }

    public function equals(Currency $currency)
    {
        if ($this->isoCode == $currency->getIsoCode())
        {
            return "Currency are equals";
        } else {
            return "Currency are not equals";
        }
    }
}
