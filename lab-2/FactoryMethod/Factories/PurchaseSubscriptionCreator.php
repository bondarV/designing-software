<?php

namespace Factories;

use Subscriptions\BaseSubscription;
use Subscriptions\DomesticSubscription;
use Subscriptions\EducationalSubscription;
use Subscriptions\PremiumSubscription;
use Subscriptions\SubscriptionInterface;

abstract class PurchaseSubscriptionCreator
{
    protected ?SubscriptionInterface $subscription = null;
    public function acceptSubscription(BaseSubscription $subscription) : self
    {
        $this->subscription = $subscription;
        return $this;
    }
    abstract public function finalPaymentAmount() : float;
}