<?php

namespace PalyaSample\Domain\Model\Registration;

use PalyaSample\Component\Model\Entity;
use PalyaSample\Domain\Model\Order\Allocation;
use PalyaSample\Domain\Model\Order\BillingInformation;
use PalyaSample\Domain\Model\Order\Customer;
use PalyaSample\Domain\Model\Order\PaymentDetails;

class Order implements Entity
{
    /**
     * @var Customer
     */
    private $customer;

    /**
     * @var BillingInformation
     */
    private $billingInformation;

    /**
     * @var PaymentDetails
     */
    private $paymentDetails;

    /**
     * @var Allocation[]
     */
    private $allocations;

    /**
     * @param Customer $customer
     * @param BillingInformation $billingInformation
     * @param PaymentDetails $paymentDetails
     * @param Allocation[] $allocations
     */
    public function __construct(
        Customer $customer,
        BillingInformation $billingInformation,
        PaymentDetails $paymentDetails,
        array $allocations
    ) {
        $this->customer = $customer;
        $this->billingInformation = $billingInformation;
        $this->paymentDetails = $paymentDetails;
        $this->allocations = $allocations;
    }

    /**
     * {@inheritdoc}
     */
    public function isIdentityEqualTo(Entity $entity): bool
    {
        // todo implement
    }
}
