<?php

namespace Subscriptions;
interface SubscriptionInterface
{
    public function getName(): string;

    public function getMonthPaymentFee(): float;

    public function getMinPeriodOfSubscriptionInDays(): int;

    public function getChannels(): array;

    public function getRequiredAdmissionAge () : int;

    public function getBenefits () : array;

    public function fullDescription() : string;

}