<?php

namespace PalyaSample\Domain\Model\Order;

use PalyaSample\Component\Model\ValueObject;
use PalyaSample\Domain\Model\Location\Country;

class BillingInformation implements ValueObject
{
    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $zip;

    /**
     * @var Country
     */
    private $country;

    /**
     * @param string $address
     * @param string $city
     * @param string $zip
     * @param Country $country
     */
    public function __construct(string $address, string $city, string $zip, Country $country)
    {
        \Assert\that($address)->notEmpty();
        \Assert\that($city)->notEmpty();
        \Assert\that($zip)->notEmpty();

        $this->address = $address;
        $this->city = $city;
        $this->zip = $zip;
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    /**
     * @return Country
     */
    public function getCountry(): Country
    {
        return $this->country;
    }

    /**
     * {@inheritdoc}
     */
    public function isEqualTo(ValueObject $object): bool
    {
        return $object instanceof BillingInformation
            && $object->getAddress() === $this->address
            && $object->getCity() === $this->city
            && $object->getZip() === $this->zip
            && $object->getCountry()->isIdentityEqualTo($this->country);
    }
}
