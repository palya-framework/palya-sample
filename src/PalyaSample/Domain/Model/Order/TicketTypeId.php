<?php

namespace PalyaSample\Domain\Model\Order;

use PalyaSample\Component\Model\ValueObject;
use Ramsey\Uuid\UuidInterface;

class TicketTypeId implements ValueObject
{
    /**
     * @var UuidInterface
     */
    private $id;

    /**
     * @param UuidInterface $id
     */
    public function __construct(UuidInterface $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return $this->id->toString();
    }

    /**
     * {@inheritdoc}
     */
    public function isEqualTo(ValueObject $object): bool
    {
        return $object instanceof TicketTypeId
            && $object->toString() === $this->id->toString();
    }
}
