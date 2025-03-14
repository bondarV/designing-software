<?php
require './autoload.php';
use Factories\{WebSiteFactory,MobileAppFactory,ManagerCallFactory};
use Subscriptions\{DomesticSubscription,EducationalSubscription,PremiumSubscription};

$managerFactory = new ManagerCallFactory();
$mobileAppFactory = new MobileAppFactory();
$websiteFactory = new WebSiteFactory();

$request = $mobileAppFactory->acceptSubscription(new DomesticSubscription)->finalPaymentAmount();
var_dump($request);
$request = $mobileAppFactory->acceptSubscription(new PremiumSubscription)->finalPaymentAmount();
var_dump($request);
$request = $mobileAppFactory->acceptSubscription(new DomesticSubscription)->finalPaymentAmount();
var_dump($request);
$request = $mobileAppFactory->acceptSubscription(new DomesticSubscription)->finalPaymentAmount();
var_dump($request);
