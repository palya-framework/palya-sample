<?php

namespace PalyaSample\Domain\Model\Registration;

use PalyaSample\Component\Model\ValueObject;

class DayPermission implements PermissionSpecification
{
    /**
     * @var \DateTimeImmutable
     */
    private $date;

    /**
     * @param \DateTimeImmutable $date
     */
    public function __construct(\DateTimeImmutable $date)
    {
        $this->date = $date;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDate(): \DateTimeImmutable
    {
        return $this->date;
    }

    /**
     * {@inheritdoc}
     */
    public function isSatisfiedBy($candidate): bool
    {
        // todo implement
    }

    /**
     * {@inheritdoc}
     */
    public function isEqualTo(ValueObject $object): bool
    {
        return $object instanceof DayPermission
            && $object->getDate() == $this->date;
    }
}
