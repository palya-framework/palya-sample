<?php

namespace PalyaSample\Domain\Model\Registration;

use PalyaSample\Component\Model\ValueObject;
use PalyaSample\Domain\Model\Scheduling\Workshop;

class WorkshopPermission implements PermissionSpecification
{
    /**
     * @var Workshop
     */
    private $workshop;

    /**
     * @param Workshop $workshop
     */
    public function __construct(Workshop $workshop)
    {
        $this->workshop = $workshop;
    }

    /**
     * @return Workshop
     */
    public function getWorkshop(): Workshop
    {
        return $this->workshop;
    }

    /**
     * {@inheritdoc}
     */
    public function isSatisfiedBy($candidate): bool
    {
        return $this->isEqualTo($candidate);
    }

    /**
     * {@inheritdoc}
     */
    public function isEqualTo(ValueObject $object): bool
    {
        return $object instanceof WorkshopPermission
            && $object->isEqualTo($object);
    }
}
