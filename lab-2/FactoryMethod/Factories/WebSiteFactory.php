<?php

namespace Factories;

use Subscriptions\DomesticSubscription;
use Subscriptions\EducationalSubscription;
use Subscriptions\PremiumSubscription;
use Subscriptions\SubscriptionInterface;

class WebSiteFactory extends PurchaseSubscriptionCreator
{
    public function finalPaymentAmount(): float
    {
     return $this->subscription->getMonthPaymentFee() / 10;
    }
}