<?php

namespace Subscriptions;

abstract class BaseSubscription implements SubscriptionInterface
{
    public function __construct(
        protected string $name,
        protected float  $monthPaymentFee,
        protected array  $channels,
        protected int    $minPeriodOfSubscriptionInDays,
        protected int    $requiredAdmissionAge,
        protected array  $benefits,
    )
    {
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function getMonthPaymentFee(): float
    {
        return $this->monthPaymentFee;
    }

    public function getChannels(): array
    {
        return $this->channels;
    }

    public function getMinPeriodOfSubscriptionInDays(): int
    {
        return $this->minPeriodOfSubscriptionInDays;
    }

    public function getRequiredAdmissionAge(): int
    {
        return $this->requiredAdmissionAge;
    }

    public function getBenefits(): array
    {
        return $this->benefits;
    }
    public function fullDescription() : string
    {
        return $this->minPeriodOfSubscriptionInDays.$this->getName().$this->getRequiredAdmissionAge().implode(',',$this->getBenefits()).$this->getRequiredAdmissionAge().implode(',',$this->getChannels());
    }

}