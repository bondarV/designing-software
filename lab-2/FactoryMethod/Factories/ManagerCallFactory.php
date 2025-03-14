<?php

namespace Factories;

use Random\Randomizer;


class ManagerCallFactory extends PurchaseSubscriptionCreator
{
    public function finalPaymentAmount() : float{
        $randomizer = new Randomizer();
        return ($this->subscription->getMonthPaymentFee() * 2) / $randomizer->getFloat(2,3);
    }
}