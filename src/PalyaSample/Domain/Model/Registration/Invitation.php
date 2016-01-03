<?php

namespace PalyaSample\Domain\Model\Registration;

use PalyaSample\Component\Model\ValueObject;

class Invitation implements ValueObject
{
    /**
     * @var Attendee
     */
    private $attendee;

    /**
     * @var \DateTimeImmutable
     */
    private $validUntil;

    /**
     * @param Attendee $attendee
     * @param \DateTimeImmutable $validUntil
     */
    public function __construct(Attendee $attendee, \DateTimeImmutable $validUntil)
    {
        $this->attendee = $attendee;
        $this->validUntil = $validUntil;
    }

    /**
     * @return Attendee
     */
    public function getAttendee(): Attendee
    {
        return $this->attendee;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getValidUntil(): \DateTimeImmutable
    {
        return $this->validUntil;
    }

    /**
     * {@inheritdoc}
     */
    public function isEqualTo(ValueObject $object): bool
    {
        return $object instanceof Invitation
            && $object->getAttendee()->isEqualTo($object->getAttendee())
            && $object->getValidUntil() == $this->validUntil;
    }
}
