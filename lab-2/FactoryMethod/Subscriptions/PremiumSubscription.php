<?php

namespace Subscriptions;

class PremiumSubscription extends BaseSubscription
{
    public function __construct()
    {
        parent::__construct(name: 'Cool-bimba',monthPaymentFee: 250,channels:['Apple+','Vakalyuk-Comedy','Amazon++','Morozov-Broadcast','2+2'],minPeriodOfSubscriptionInDays: 30,requiredAdmissionAge: 12,benefits: ['scalable','recreational','chill']);
    }
}