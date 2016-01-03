<?php

namespace PalyaSample\Domain\Model\Order;

use PalyaSample\Component\Model\ValueObject;

class Customer implements ValueObject
{
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $email;

    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     */
    public function __construct(string $firstName, string $lastName, string $email)
    {
        \Assert\that($firstName)->notEmpty();
        \Assert\that($lastName)->notEmpty();
        \Assert\that($email)->notEmpty()->email();

        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * {@inheritdoc}
     */
    public function isEqualTo(ValueObject $object): bool
    {
        return $object instanceof Customer
            && $object->getFirstName() === $this->firstName
            && $object->getLastName() === $this->lastName
            && $object->getEmail() === $this->email;
    }
}
