<?php

namespace Subscriptions;

class EducationalSubscription extends BaseSubscription
{
    public function __construct()
    {
        parent::__construct(name: 'Educational-Extra',monthPaymentFee: 40.2,channels:['Hulu','STB','Youtube TV','Disney+','Novyi'],minPeriodOfSubscriptionInDays: 365,requiredAdmissionAge: 6,benefits: ['simplicity','academic','serious']);
    }
}