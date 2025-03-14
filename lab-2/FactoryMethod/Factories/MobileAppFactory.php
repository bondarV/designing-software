<?php

namespace Factories;


use \Random\Randomizer;
class MobileAppFactory extends PurchaseSubscriptionCreator
{

    public function finalPaymentAmount() : float{
        $randomizer = new Randomizer();
        return ($this->subscription->getMonthPaymentFee() * 2) / $randomizer->getFloat(1.5,3);
    }

}