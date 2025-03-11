<?php
namespace FactoryMethod\Factories;
use FactoryMethod\Subscriptions\SubscriptionInterface;

abstract class Creator
{
    public abstract function getSubscriptionType(): SubscriptionInterface;


}