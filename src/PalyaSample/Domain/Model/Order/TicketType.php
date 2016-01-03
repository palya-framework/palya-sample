<?php

namespace PalyaSample\Domain\Model\Order;

use PalyaSample\Component\Model\Entity;

class TicketType implements Entity
{
    /**
     * @var TicketTypeId
     */
    private $ticketTypeId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var Price
     */
    private $price;

    /**
     * @var \DateTimeImmutable
     */
    private $validUntil;

    /**
     * @param TicketTypeId $ticketTypeId
     * @param string $name
     * @param Price $price
     * @param \DateTimeImmutable $validUntil
     */
    public function __construct(
        TicketTypeId $ticketTypeId,
        string $name,
        Price $price,
        \DateTimeImmutable $validUntil
    ) {
        $this->ticketTypeId = $ticketTypeId;
        $this->name = $name;
        $this->price = $price;
        $this->validUntil = $validUntil;
    }

    /**
     * @return TicketTypeId
     */
    public function getTicketTypeId()
    {
        return $this->ticketTypeId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * {@inheritdoc}
     */
    public function isIdentityEqualTo(Entity $entity): bool
    {
        return $entity instanceof TicketType
            && $entity->getTicketTypeId()->isEqualTo($this->ticketTypeId);
    }
}
