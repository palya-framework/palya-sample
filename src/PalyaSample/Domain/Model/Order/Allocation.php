<?php

namespace PalyaSample\Domain\Model\Order;

use PalyaSample\Component\Model\ValueObject;
use PalyaSample\Domain\Model\Registration\Attendee;

class Allocation implements ValueObject
{
    /**
     * @var Attendee
     */
    private $attendee;

    /**
     * @var TicketType
     */
    private $ticketType;

    /**
     * @param Attendee $attendee
     * @param TicketType $ticketType
     */
    public function __construct(Attendee $attendee, TicketType $ticketType)
    {
        $this->attendee = $attendee;
        $this->ticketType = $ticketType;
    }

    /**
     * @return Attendee
     */
    public function getAttendee(): Attendee
    {
        return $this->attendee;
    }

    /**
     * @return TicketType
     */
    public function getTicketType(): TicketType
    {
        return $this->ticketType;
    }

    /**
     * {@inheritdoc}
     */
    public function isEqualTo(ValueObject $object): bool
    {
        return $object instanceof Allocation
            && $object->getAttendee()->isEqualTo($this->attendee)
            && $object->getTicketType()->isIdentityEqualTo($this->getTicketType());
    }
}
