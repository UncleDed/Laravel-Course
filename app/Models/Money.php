<?php

namespace App\Models;

class Money
{
    private $amount;
    private $currency;

    public function __construct(int | float $amount, Currency | String $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }


    public function getAmount(): float | int
    {
        return $this->amount;
    }

    public function setAmount(float|int $amount): void
    {
        $this->amount = $amount;
    }


    public function getCurrency(): String
    {
        return $this->currency;
    }

    public function setCurrency(Currency | string $currency): void
    {
        $this->currency = $currency;
    }


    public function equals(Money $money): String
    {
        if ($this->currency == $money->getCurrency())
        {
            if ($this->getAmount() == $money->getAmount())
            {
                return "The currency and an amount are equals";
            } else {
                return "Currencies are equal but amounts are different";
            }
        } else {
            return "Currencies are different";
        }
    }

    public function add(Money $money)
    {
        if ($this->currency == $money->getCurrency())
        {
            return new Money($this->amount + $money->getAmount(), $currency =  new Currency($this->currency));
        } else {
            throw new \InvalidArgumentException('Currencies are not the same');
        }
    }
}
