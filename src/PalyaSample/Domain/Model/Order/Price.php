<?php

namespace PalyaSample\Domain\Model\Order;

use PalyaSample\Component\Model\ValueObject;

class Price implements ValueObject
{
    /**
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $currency;

    /**
     * @param int $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        \Assert\that($amount)->notEmpty();
        \Assert\that($currency)->regex('/[A-Z]{3}/');

        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * {@inheritdoc}
     */
    public function isEqualTo(ValueObject $object): bool
    {
        return $object instanceof Price
            && $object->getAmount() === $this->amount
            && $object->getCurrency() === $this->currency;
    }
}
