<?php

namespace Subscriptions;

class DomesticSubscription extends BaseSubscription
{
    public function __construct()
    {
        parent::__construct(name: 'Domestic',monthPaymentFee: 103.2,channels: ['Hulu','Max','Youtube TV','Disney+','Sing TV'],minPeriodOfSubscriptionInDays: 10,requiredAdmissionAge: 0,benefits: ['family-shared','mutual','accessible']);
    }


}